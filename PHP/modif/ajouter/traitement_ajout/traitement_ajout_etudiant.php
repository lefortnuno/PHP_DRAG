<?php
    include '../../../connexionbd.php';
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $niveau = $_POST['lvl'];
    $parcours = $_POST['Parcours'];
    $email = $_POST['Email'];

    if(isset($nom) && isset($prenom) && isset($niveau) && isset($parcours) && isset($email)){
        $nom = strip_tags($nom);
        $nom = strtoupper($nom);
        $prenom = strip_tags($prenom);
        $email = trim($email);
        $email = strip_tags($email);


        $ajouter = "INSERT INTO etudiant(nom, prenom, niveau, parcours, adr_email)
                    VALUES 
                    (:nom, :prenom, :niveau, :parcours, :adr_email)";
        $ajouter_p = $connexion->prepare($ajouter);
        $ajouter_p->bindParam(':nom', $nom);
        $ajouter_p->bindParam(':prenom', $prenom);
        $ajouter_p->bindParam(':niveau', $niveau);
        $ajouter_p->bindParam(':parcours', $parcours);
        $ajouter_p->bindParam(':adr_email', $email);

        $ajouter_p->execute();

        header('Location: /PROJET/PHP/modif/ajouter/ajout_etudiant.php');

    }
    else{
        echo" erreur dans le formulaire";
    }
?>