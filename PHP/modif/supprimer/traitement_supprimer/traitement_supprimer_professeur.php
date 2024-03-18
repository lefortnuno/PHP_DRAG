<?php
    include '../../../connexionbd.php';
    $idprof = $_POST['Idprof'];

    if(isset($idprof)){
        
        $supprimer = "DELETE FROM professeur where id_prof = :id_prof";
        $supprimer_p = $connexion->prepare($supprimer);

        $supprimer_p->bindParam(':id_prof', $idprof);

        $supprimer_p->execute();

        header('Location: /PROJET/PHP/modif/supprimer/suppr_professeur.php');

    }
    else{
        echo" erreur dans le formulaire";
    }
?>