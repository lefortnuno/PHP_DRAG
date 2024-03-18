<?php
    include '../../../connexionbd.php';

    $Idprof = $_POST['Idprof'];
    $nomP = $_POST['nomP'];
    $nomP = strip_tags($nomP);
    $nomP = strtoupper($nomP);
    $prenomP = $_POST['prenomP'];
    $prenomP = strip_tags($prenomP);
    $civilite = $_POST['civilite'];
    $grade = $_POST['grade'];

    if(isset($_POST['Idprof']) && !empty($_POST['Idprof']))
    {
        $requeete = "SELECT id_prof from professeur where id_prof = :id_prof";
        $requeetep = $connexion->prepare($requeete);
        $requeetep->bindParam(':id_prof', $Idprof);
        $requeetep->execute();
        $lignes = $requeetep->fetchAll(PDO::FETCH_ASSOC);

        if($lignes){
            if(!empty($_POST['nomP']))
            {
                $nrequete = "UPDATE professeur set nom = :nom WHERE id_prof = :id_prof";
                $nrequetep = $connexion->prepare($nrequete);
                $nrequetep->bindParam(':nom', $nomP);
                $nrequetep->bindParam(':id_prof', $Idprof);
                $nrequetep->execute();
                //$ligne1 = $requeetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['prenomP']))
            {
                $pnrequete = "UPDATE professeur set prenom = :prenom WHERE id_prof = :id_prof";
                $pnrequetep = $connexion->prepare($pnrequete);
                $pnrequetep->bindParam(':prenom', $prenomP);
                $pnrequetep->bindParam(':id_prof', $Idprof);
                $pnrequetep->execute();
                //$ligne2 = $pnrequetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['civilite']))
            {
                $lrequete = "UPDATE professeur set civilite = :civilite WHERE id_prof = :id_prof";
                $lrequetep = $connexion->prepare($lrequete);
                $lrequetep->bindParam(':civilite', $civilite);
                $lrequetep->bindParam(':id_prof', $Idprof);
                $lrequetep->execute();
                //$ligne3 = $lrequetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['grade']))
            {
                $prequete = "UPDATE professeur set grade = :grade WHERE id_prof = :id_prof";
                $prequetep = $connexion->prepare($prequete);
                $prequetep->bindParam(':grade', $grade);
                $prequetep->bindParam(':id_prof', $Idprof);
                $prequetep->execute();
                //$ligne4 = $prequetep->fetchAll(PDO:FETCH_ASSOC);
            }
        }
        header('Location: /PROJET/PHP/Liste/prof.php');
    }
    
?>