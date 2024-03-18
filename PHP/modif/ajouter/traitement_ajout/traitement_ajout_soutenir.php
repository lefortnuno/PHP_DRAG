<?php
//session_start();
include '../../../connexionbd.php';
require_once('../../../tcpdf/tcpdf.php');

$matricule = $_POST['matricule'];
$Idorg = $_POST['Idorg'];
$dateA = $_POST['dateA'];
$note = $_POST['note'];

//$SESSION['noty'] = $note;
$note_lettre = "";
switch($note)
{
    case 0:
        $note_lettre = "zero";
        break;
    case 1:
        $note_lettre = "un";
        break;
    case 2:
        $note_lettre = "deux";
        break;
    case 3:
        $note_lettre = "trois";
        break;
    case 4:
        $note_lettre = "quatre";
        break;
    case 5:
        $note_lettre = "cinq";
        break;
    case 6:
        $note_lettre = "six";
        break;
    case 7:
        $note_lettre = "sept";
        break;
    case 8:
        $note_lettre = "huit";
        break;
    case 9:
        $note_lettre = "neuf";
        break;
    case 10:
        $note_lettre = "dix";
        break;
    case 11:
        $note_lettre = "onze";
        break;
    case 12:
        $note_lettre = "douze";
        break;
    case 13:
        $note_lettre = "treize";
        break;
    case 14:
        $note_lettre = "quatorze";
        break;
    case 15:
        $note_lettre = "quinze";
        break;
    case 16:
        $note_lettre = "seize";
        break;
    case 17:
        $note_lettre = "dix-sept";
        break;
    case 18:
        $note_lettre = "dix-huit";
        break;
    case 19:
        $note_lettre = "dix-neuf";
        break;
    case 20:
        $note_lettre = "vingt";
        break;

}
//$SESSION['lettre_noty'] = $note_lettre;

$president = $_POST['president'];
$examinateur = $_POST['examinateur'];
$Rapporteur_int = $_POST['rapporteur_int'];
$Rapporteur_ext = $_POST['rapporteur_ext'];
 if(isset($matricule) && isset($Idorg) && isset($dateA) && isset($note) && isset($president)
  && isset($examinateur)&& isset($Rapporteur_int)&& isset($Rapporteur_ext)){

    try {
        //Test re oatra ka mi existe le matricule
        $test_m = "SELECT * from etudiant WHERE matricule = :matricule";
        $test_m_p = $connexion->prepare($test_m);
        $test_m_p->bindParam(':matricule', $matricule);
        $test_m_p->execute();
        
        $resultat_test = $test_m_p->fetch(PDO::FETCH_ASSOC);

        if($resultat_test){
        $ajouter = "INSERT INTO soutenir(matricule, id_org, date_soutenance, note, president, examinateur, rapporteur_int, rapporteur_ext)
                    VALUES 
                    (:matricule, :id_org, :date_soutenance, :note, :president, :examinateur, :rapporteur_int, :rapporteur_ext)";
        $ajouter_p = $connexion->prepare($ajouter);
        $ajouter_p->bindParam(':matricule', $matricule);
        $ajouter_p->bindParam(':id_org', $Idorg);
        $ajouter_p->bindParam(':date_soutenance', $dateA);
        $ajouter_p->bindParam(':note', $note);
        $ajouter_p->bindParam(':president', $president);
        $ajouter_p->bindParam(':examinateur', $examinateur);
        $ajouter_p->bindParam(':rapporteur_int', $Rapporteur_int);
        $ajouter_p->bindParam(':rapporteur_ext', $Rapporteur_ext);
    
        // Exécution de la requête
        $ajouter_p->execute();
        // Si la requête est réussie, vous pouvez rediriger ou afficher un message de succès ici
        echo "Insertion réussie. Redirection...";
        // Redirection après succès
        // header('Location: votre_page_de_succès.php');
        // exit;
        }
        else{
            header('Location: /PROJET/PHP/Liste/soutenance.php');
        }
    } catch (PDOException $e) {
        // Vérification si l'erreur est le code 1062 pour une entrée dupliquée
        if ($e->errorInfo[1] == 1062) {
            // Gestion spécifique de l'erreur d'entrée dupliquée
            echo "La soutenance existe déjà. Redirection...";
            // Redirection ou gestion de l'erreur d'entrée dupliquée
            // header('Location: votre_page_d_erreur.php');
            // exit;
        } else {
            // Gestion des autres erreurs PDO
            echo "Erreur de base de données : " . $e->getMessage();
            // Autre gestion d'erreur ou redirection
        }
    }

    if($ajouter_p){
    
    $d_parcours = "SELECT parcours FROM etudiant WHERE matricule = :matricule";
    $d_parcours_p = $connexion->prepare($d_parcours);
    $d_parcours_p->bindParam(':matricule', $matricule);
    $d_parcours_p->execute();
    $r_parcours = $d_parcours_p->fetch(PDO::FETCH_ASSOC);
    
    /*Valeur de parcours eleve*/$parcours = $r_parcours['parcours'];
                                $parcours_complet = "";
                                switch($parcours){
                                    case "GB":
                                        $parcours_complet = "Génie Logiciel et Base de Donnée";
                                        break;
                                    case "SR":
                                        $parcours_complet = "Administration Système et réseau";
                                        break;
                                    case "IG":
                                        $parcours_complet = "Informatique Général";
                                        break;
                                }
                                //$SESSION['parcourou'] = $parcours_complet;


    $d_nom = "SELECT nom FROM etudiant WHERE matricule = :matricule";
    $d_nom_p = $connexion->prepare($d_nom);
    $d_nom_p->bindParam(':matricule', $matricule);
    $d_nom_p->execute();
    $r_nom = $d_nom_p->fetch(PDO::FETCH_ASSOC);
    /*Valeur de nom eleve*/ $nom = $r_nom['nom'];


    $d_prenom = "SELECT prenom FROM etudiant WHERE matricule = :matricule";
    $d_prenom_p = $connexion->prepare($d_prenom);
    $d_prenom_p->bindParam(':matricule', $matricule);
    $d_prenom_p->execute();
    $r_prenom = $d_prenom_p->fetch(PDO::FETCH_ASSOC);
    /*Valeur de prenom eleve*/$prenom = $r_prenom['prenom'];
    
    $d_prenom_president = "SELECT * FROM professeur WHERE prenom = (SELECT president FROM soutenir WHERE matricule = :matricule)";
    $d_prenom_president_p = $connexion->prepare($d_prenom_president);
    $d_prenom_president_p->bindParam(':matricule', $matricule);
    $d_prenom_president_p->execute();

    $rr_prenom_president = $d_prenom_president_p->fetch(PDO::FETCH_ASSOC);

    
    /*Valeur de president */$nom_president = $rr_prenom_president['nom'];
                                   $civilite_president = $rr_prenom_president['civilite'];
                                   $grade_president = $rr_prenom_president['grade'];

    $d_prenom_examinateur = "SELECT * FROM professeur WHERE prenom = (SELECT examinateur FROM soutenir WHERE matricule = :matricule)";
    $d_prenom_examinateur_p = $connexion->prepare($d_prenom_examinateur);
    $d_prenom_examinateur_p->bindParam(':matricule', $matricule);
    $d_prenom_examinateur_p->execute();

                                    $rr_prenom_examinateur = $d_prenom_examinateur_p->fetch(PDO::FETCH_ASSOC);
                                    $nom_president = $rr_prenom_president['nom'];
                                    $civilite_president = $rr_prenom_president['civilite'];
                                    $grade_president = $rr_prenom_president['grade'];
    echo "<br>";


    /*Valeur de examinateur*/   $nom_examinateur = $rr_prenom_examinateur['nom'];
                                $civilite_examinateur = $rr_prenom_examinateur['civilite'];
                                $grade_examinateur = $rr_prenom_examinateur['grade'];

                                $d_prenom_Rapporteur_int = "SELECT * FROM professeur WHERE prenom = (SELECT rapporteur_int FROM soutenir WHERE matricule = :matricule)";
                                $d_prenom_Rapporteur_int_p = $connexion->prepare($d_prenom_Rapporteur_int);
                                $d_prenom_Rapporteur_int_p->bindParam(':matricule', $matricule);
                                $d_prenom_Rapporteur_int_p->execute();
                                
                                $rr_prenom_Rapporteur_int = $d_prenom_Rapporteur_int_p->fetch(PDO::FETCH_ASSOC);


    /*Valeur de nprenomom rapp_int*/$nom_Rapporteur_int = $rr_prenom_Rapporteur_int['nom'];
                                    $civilite_Rapporteur_int = $rr_prenom_Rapporteur_int['civilite'];
                                    $grade_Rapporteur_int = $rr_prenom_Rapporteur_int['grade'];

    echo $nom_Rapporteur_int;
    $pdf = new TCPDF();
    $pdf->setPrintHeader(false);
    $pdf->AddPage();
    $contenuhtml = <<<EOD
        <style>
            *{
                font-family: Helvetica;
            }
            .tt{
                width: 100vh;
                margin: 0 auto;
            }
            .milieu{
                text-align: center;
            }
            .underline{
                text-decoration: underline;
            }
            .bold{
                font-weight: bold;
            }
            pre{
                font-size: 12px;
                font-weight: 400;
            }
            span{
                font-weight: bolder;
            }
        </style>

            <p class="milieu">PROCES VERBAL</p>
            <p class="milieu">SOUTENANCE DE FIN D'ETUDE POUR L'OBTENTION DU DIPLOME DE LICENCE PROFESSIONNELLE</p>
            <p class="milieu"><span>Mention :</span> Informatique</p>
            <p class="milieu"><span>Parcours :</span> $parcours_complet </p>

                    <p>$nom $prenom</p>
                    <p>a soutenu publiquement son memoire de fin d'études pour l'obtention du diplôme de Licence professionnelle</p>
                <p>Après la déliberation, la commission des membres du Jury a attribué la note de <b>$note</b>/20 ($note_lettre sur vingt)</p>
                <p class="underline">Membres du jury</p>
                <table cellpadding="4">
    <tr>
        <td style="width: 100px; font-weight: bold;">Président :</td>
        <td>$civilite_president $nom_president $president, $grade_president</td>
    </tr>
    <tr>
        <td style="width: 100px; font-weight: bold;">Examinateur :</td>
        <td>$civilite_examinateur $nom_examinateur $examinateur, $grade_examinateur</td>
    </tr>
    <tr>
        <td style="width: 100px; font-weight: bold; vertical-align: top;">Rapporteurs :</td>
        <td>$civilite_Rapporteur_int $nom_Rapporteur_int $Rapporteur_int, $grade_Rapporteur_int<br><br>$Rapporteur_ext
        </td>
    </tr>
</table>
                    
EOD;
    $pdf->writeHTML($contenuhtml, true, false, true, false, '');

    // Sortie du PDF
    // Vous pouvez changer 'I' pour 'D' pour forcer le téléchargement
    ob_end_clean();
    $pdf->Output('soutenance '.$prenom.'.pdf', 'D');
    }


    header('Location: /PROJET/PHP/Liste/soutenance.php');

}
else{
    echo" erreur dans le formulaire";
}
?>