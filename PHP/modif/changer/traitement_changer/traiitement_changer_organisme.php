<?php
    include '../../../connexionbd.php';

    $idorg = $_POST['idorg'];
    $design = $_POST['design'];
    $design = strip_tags($design);
    $Lieu = $_POST['Lieu'];
    $Lieu = strip_tags($Lieu);

    if(isset($_POST['idorg']) && !empty($_POST['idorg']))
    {
        $requeete = "SELECT id_org from organisme where id_org = :id_org";
        $requeetep = $connexion->prepare($requeete);
        $requeetep->bindParam(':id_org', $idorg);
        $requeetep->execute();
        $lignes = $requeetep->fetchAll(PDO::FETCH_ASSOC);

        if($lignes){
            if(!empty($_POST['design']))
            {
                $nrequete = "UPDATE organisme set designation = :designation WHERE id_org = :id_org";
                $nrequetep = $connexion->prepare($nrequete);
                $nrequetep->bindParam(':designation', $design);
                $nrequetep->bindParam(':id_org', $idorg);
                $nrequetep->execute();
                //$ligne1 = $requeetep->fetchAll(PDO:FETCH_ASSOC);
            }
            if(!empty($_POST['Lieu']))
            {
                $pnrequete = "UPDATE organisme set lieu = :lieu WHERE id_org = :id_org";
                $pnrequetep = $connexion->prepare($pnrequete);
                $pnrequetep->bindParam(':lieu', $Lieu);
                $pnrequetep->bindParam(':id_org', $idorg);
                $pnrequetep->execute();
                //$ligne2 = $pnrequetep->fetchAll(PDO:FETCH_ASSOC);
            }
        }
        header('Location: /PROJET/PHP/Liste/orga.php');
    }
    
?>