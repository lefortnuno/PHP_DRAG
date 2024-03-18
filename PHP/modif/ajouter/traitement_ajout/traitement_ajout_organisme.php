<?php
    include '../../../connexionbd.php';
    $design = $_POST['design'];
    $lieu = $_POST['Lieu'];

    if(isset($design) && isset($lieu)){
        $design = strip_tags($design);
        $lieu = strip_tags($lieu);

        $ajouter = "INSERT INTO organisme(designation, lieu)
                    VALUES 
                    (:designation, :lieu)";

        $ajouter_p = $connexion->prepare($ajouter);
        $ajouter_p->bindParam(':designation', $design);
        $ajouter_p->bindParam(':lieu', $lieu);

        $ajouter_p->execute();

        header('Location: /PROJET/PHP/modif/ajouter/ajout_organisme.php');

    }
    else{
        echo" erreur dans le formulaire";
    }
?>