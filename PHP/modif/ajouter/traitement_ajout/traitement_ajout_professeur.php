<?php
    include '../../../connexionbd.php';
    $nomP = $_POST['nomP'];
    $prenomP = $_POST['prenomP'];
    $civilite = $_POST['civilite'];
    $grade = $_POST['grade'];

    if(isset($nomP) && isset($prenomP) && isset($civilite) && isset($grade)){
        echo "données completes";
        $nomP = strip_tags($nomP);
        $nomP = strtoupper($nomP);
        $prenomP = strip_tags($prenomP);

        $ajouter = "INSERT INTO professeur(nom, prenom, civilite, grade)
                    VALUES 
                    (:nom, :prenom, :civilite, :grade)";
        $ajouter_p = $connexion->prepare($ajouter);
        $ajouter_p->bindParam(':nom', $nomP);
        $ajouter_p->bindParam(':prenom', $prenomP);
        $ajouter_p->bindParam(':civilite', $civilite);
        $ajouter_p->bindParam(':grade', $grade);

        $ajouter_p->execute();

        header('Location: /PROJET/PHP/modif/ajouter/ajout_professeur.php');

    }
    else{
        echo" erreur dans le formulaire";
    }

    ?>


