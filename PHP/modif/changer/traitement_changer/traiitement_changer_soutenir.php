<?php
    include '../../../connexionbd.php';
    require_once('../../../tcpdf/tcpdf.php');
    $matricule = $_POST['matricule'];
    $note = $_POST['note'];
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
    $president = $_POST['president'];
    $examinateur = $_POST['examinateur'];
    $rapporteur_int = $_POST['rapporteur_int'];
    $rapporteur_ext = $_POST['rapporteur_ext'];
    $rapporteur_ext = strip_tags($rapporteur_ext);

    if(isset($_POST['matricule']) && !empty($_POST['matricule']))
    {
        $test = "SELECT * from soutenir where matricule = :matricule";
        $test_p = $connexion->prepare($test);
        $test_p->bindParam(':matricule', $matricule);
        $test_p->execute();
        $res_test = $test_p->fetch(PDO::FETCH_ASSOC);

        if($res_test){
            if(!empty($note)){
                $requete1 = "UPDATE soutenir SET note = :note where matricule = :matricule";
                $requete1_p = $connexion->prepare($requete1);
                $requete1_p->bindParam(':note', $note);
                $requete1_p->bindParam(':matricule', $matricule);
                $requete1_p->execute();
            }
            else{
                $notebd = "SELECT * FROM soutenir where note = (SELECT note from soutenir WHERE matricule = :matricule) AND matricule = :matricule";
                $notebd_p = $connexion->prepare($notebd);
                $notebd_p->bindParam(':matricule', $matricule);
                $notebd_p->execute();
                $ress = $notebd_p->fetch(PDO::FETCH_ASSOC);

                $note = $ress['note'];
            }
            if(!empty($president)){
                $requete2 = "UPDATE soutenir SET president = :president where matricule = :matricule";
                $requete2_p = $connexion->prepare($requete2);
                $requete2_p->bindParam(':president', $president);
                $requete2_p->bindParam(':matricule', $matricule);
                $requete2_p->execute();
            }
            if(!empty($examinateur)){
                $requete3 = "UPDATE soutenir SET examinateur = :examinateur where matricule = :matricule";
                $requete3_p = $connexion->prepare($requete3);
                $requete3_p->bindParam(':examinateur', $examinateur);
                $requete3_p->bindParam(':matricule', $matricule);
                $requete3_p->execute();
            }
            if(!empty($rapporteur_int)){
                $requete4 = "UPDATE soutenir SET rapporteur_int = :rapporteur_int where matricule = :matricule";
                $requete4_p = $connexion->prepare($requete4);
                $requete4_p->bindParam(':rapporteur_int', $rapporteur_int);
                $requete4_p->bindParam(':matricule', $matricule);
                $requete4_p->execute();
            }
            if(!empty($rapporteur_ext)){
                $requete5 = "UPDATE soutenir SET rapporteur_ext = :rapporteur_ext where matricule = :matricule";
                $requete5_p = $connexion->prepare($requete5);
                $requete5_p->bindParam(':rapporteur_ext', $rapporteur_ext);
                $requete5_p->bindParam(':matricule', $matricule);
                $requete5_p->execute();
            }
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
                                    $prenom_rapporteur_int = $rr_prenom_Rapporteur_int['prenom'];
                                    $civilite_Rapporteur_int = $rr_prenom_Rapporteur_int['civilite'];
                                    $grade_Rapporteur_int = $rr_prenom_Rapporteur_int['grade'];

    /*rapporteur ext */  $rpext = "SELECT * FROM soutenir WHERE rapporteur_ext = (SELECT rapporteur_ext FROM soutenir WHERE matricule = :matricule)";
                            $rpext_p = $connexion->prepare($rpext);
                            $rpext_p->bindParam(':matricule', $matricule);
                            $rpext_p->execute();
                            $rpext_r = $rpext_p->fetch(PDO::FETCH_ASSOC);
                            
                            $Rapporteur_ext = $rpext_r['rapporteur_ext'];


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
        <td>$civilite_Rapporteur_int $nom_Rapporteur_int $prenom_rapporteur_int, $grade_Rapporteur_int<br><br>$Rapporteur_ext
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

        else{
            echo "Ligne non existante";
            header('Location: /PROJET/PHP/modif/changer/soutenancenontrouvee.php');

        }

        /* ---------------------------------------------------------------------------------------------------- */
        
    } 
    else{
        echo"Erreur dans le formulaire";
    }

        header('Location: /PROJET/PHP/Liste/soutenance.php');
    
    
?>