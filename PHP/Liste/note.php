<?php
    include '../connexionbd.php';
    session_start();
    $dateinitial = $_POST['datei'];
    $datefinal = $_POST['datef'];

    if(isset($dateinitial) && isset($datefinal) && !empty($dateinitial) && !empty($datefinal)){

        $requete_date = "SELECT * FROM soutenir WHERE date_soutenance BETWEEN :datei AND :datef";
        $requete_date_p = $connexion->prepare($requete_date);
        $requete_date_p->bindParam(':datei', $dateinitial);
        $requete_date_p->bindParam(':datef', $datefinal);
        $requete_date_p->execute();
        $resultat_requete = $requete_date_p->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION['note_entre'] = $resultat_requete;

        header('Location: /PROJET/PHP/Liste/afifichagenote.php');

    }
    else if(empty($dateinitial) || empty($datefinal)){
        header('Location: /PROJET/PHP/Liste/soutenance.php');
    }
    
?>