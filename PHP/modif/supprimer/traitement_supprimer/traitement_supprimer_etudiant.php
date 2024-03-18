<?php
    include '../../../connexionbd.php';
    $matricule = $_POST['Matricule'];

    if(isset($matricule)){

        $supprimer = "DELETE FROM etudiant where matricule = :matricule";
        $supprimer_p = $connexion->prepare($supprimer);

        $supprimer_p->bindParam(':matricule', $matricule);

        $supprimer_p->execute();

        header('Location: /PROJET/PHP/modif/supprimer/suppr_etudiant.php');

    }
    else{
        echo" erreur dans le formulaire";
    }
?>