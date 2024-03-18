<?php
    include '../../../connexionbd.php';
    $design = $_POST['design'];

    if(isset($design)){
        $supp = "DELETE FROM soutenir WHERE matricule = :matricule";
        $supp_p = $connexion->prepare($supp);
        $supp_p->bindParam(':matricule', $design);
        $supp_p->execute();

        header('Location: /PROJET/PHP/Liste/soutenance.php');

    }
    else{
        echo" erreur dans le formulaire";
    }
?>