<?php
    include '../../connexionbd.php';
    session_start();

    $recherche = $_POST['chercher'];

    if(!empty($recherche)){
        $recherche = strip_tags($recherche);
        $recherche = trim($recherche);
        if (is_numeric($recherche))
        {
            $requete = "SELECT * FROM professeur where id_prof = :id_prof";
            $requete_p=$connexion->prepare($requete);
            $requete_p->bindParam(':id_prof', $recherche, PDO::PARAM_STR);
            $requete_p->execute();
            $lignes = $requete_p->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['resultats_recherche'] = $lignes;

        }
        else if(is_string($recherche)){
            $rrecherche = $recherche."%";
            $requete = "SELECT * FROM professeur where nom like :nom";
            $requete_p=$connexion->prepare($requete);
            $requete_p->bindParam(':nom', $rrecherche, PDO::PARAM_STR);
            $requete_p->execute();
            $lignes = $requete_p->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['resultats_recherche'] = $lignes;
        }
        header ('Location: /PROJET/PHP/Liste/recherche/resultat_recherche_professeur.php');
    }
?>