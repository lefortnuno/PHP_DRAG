<?php
    include '../../../connexionbd.php';

    $matricule = $_POST['Matricule'];
    $nom = $_POST['nom'];
    $nom = strip_tags($nom);
    $nom = strtoupper($nom);
    $prenom = $_POST['prenom'];
    $prenom = strip_tags($prenom);
    $niveau = $_POST['lvl'];
    $parcours = $_POST['Parcours'];
    $email = $_POST['Email'];
    $email = trim($email);
    $email = strtolower($email);

    if(isset($_POST['Matricule']) && !empty($_POST['Matricule']))
    {
        $requeete = "SELECT matricule from etudiant where matricule = :matricule";
        $requeetep = $connexion->prepare($requeete);
        $requeetep->bindParam(':matricule', $matricule);
        $requeetep->execute();
        $lignes = $requeetep->fetchAll(PDO::FETCH_ASSOC);

        if($lignes){
            if(!empty($_POST['nom']))
            {
                $nrequete = "UPDATE etudiant set nom = :nom WHERE matricule = :matricule";
                $nrequetep = $connexion->prepare($nrequete);
                $nrequetep->bindParam(':nom', $nom);
                $nrequetep->bindParam(':matricule', $matricule);
                $nrequetep->execute();
                //$ligne1 = $requeetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['prenom']))
            {
                $pnrequete = "UPDATE etudiant set prenom = :prenom WHERE matricule = :matricule";
                $pnrequetep = $connexion->prepare($pnrequete);
                $pnrequetep->bindParam(':prenom', $prenom);
                $pnrequetep->bindParam(':matricule', $matricule);
                $pnrequetep->execute();
                //$ligne2 = $pnrequetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['lvl']))
            {
                $lrequete = "UPDATE etudiant set niveau = :niveau WHERE matricule = :matricule";
                $lrequetep = $connexion->prepare($lrequete);
                $lrequetep->bindParam(':niveau', $niveau);
                $lrequetep->bindParam(':matricule', $matricule);
                $lrequetep->execute();
                //$ligne3 = $lrequetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['Parcours']))
            {
                $prequete = "UPDATE etudiant set parcours = :parcours WHERE matricule = :matricule";
                $prequetep = $connexion->prepare($prequete);
                $prequetep->bindParam(':parcours', $parcours);
                $prequetep->bindParam(':matricule', $matricule);
                $prequetep->execute();
                //$ligne4 = $prequetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['Email']))
            {
                $erequete = "UPDATE etudiant set adr_email = :adr_email WHERE matricule = :matricule";
                $erequetep = $connexion->prepare($erequete);
                $erequetep->bindParam(':adr_email', $email);
                $erequetep->bindParam(':matricule', $matricule);
                $erequetep->execute();
               // $ligne5 = $erequetep->fetchAll(PDO:FETCH_ASSOC);
            }
        }
        header('Location: /PROJET/PHP/Liste/etudiant.php');
    }
    
?>