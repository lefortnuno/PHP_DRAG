<?php
    include '../../../connexionbd.php';
    $idorg = $_POST['idorg'];

    if(isset($idorg)){
        $supprimer = "DELETE FROM organisme where id_org = :id_org";
        $supprimer_p = $connexion->prepare($supprimer);

        $supprimer_p->bindParam(':id_org', $idorg);

        $supprimer_p->execute();

        header('Location: /PROJET/PHP/modif/supprimer/suppr_organisme.php');

    }
    else{
        echo" erreur dans le formulaire";
    }
?>