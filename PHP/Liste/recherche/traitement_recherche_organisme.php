<?php
    include '../../connexionbd.php';
    session_start();

    $recherche = $_POST['chercher'];

    if(!empty($recherche)){
        $recherche = strip_tags($recherche);
        $recherche = trim($recherche);
        if (is_numeric($recherche))
        {
            $requete = "SELECT * FROM organisme where id_org = :id_org";
            $requete_p=$connexion->prepare($requete);
            $requete_p->bindParam(':id_org', $recherche, PDO::PARAM_STR);
            $requete_p->execute();
            $lignes = $requete_p->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['resultats_recherche'] = $lignes;

        }
        else if(is_string($recherche)){
            $rrecherche = $recherche."%";
            $requete = "SELECT * FROM organisme where designation like :designation";
            $requete_p=$connexion->prepare($requete);
            $requete_p->bindParam(':designation', $rrecherche, PDO::PARAM_STR);
            $requete_p->execute();
            $lignes = $requete_p->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['resultats_recherche'] = $lignes;
        }
        header ('Location: /PROJET/PHP/Liste/recherche/resultat_recherche_organisme.php');
    }
?>