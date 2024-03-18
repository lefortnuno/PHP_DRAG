<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../indexcss.css">
    <link rel="stylesheet" href="liste.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../nav_etudiant.php'?>
    <div class="container-fluid mx-2">
        <div class="row py-4 text-center">
            <p class="fs-4 fw-bold">Liste des étudiants</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Niveau</th>
                    <th>Parcous</th>
                    <th>Email</th>
                </tr>
                <?php
                    include '../connexionbd.php';
                    $afficher = "SELECT * FROM etudiant ORDER BY matricule ASC";
                    $resultat = $connexion->query($afficher);
                    $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($ligne as $res){
                        echo "<tr>";
                            echo "<td>".$res['matricule']."</td>";
                            echo "<td>".$res['nom']."</td>";
                            echo "<td>".$res['prenom']."</td>";
                            echo "<td>".$res['niveau']."</td>";
                            echo "<td>".$res['parcours']."</td>";
                            echo "<td>".$res['adr_email']."</td>";
                        echo "</tr>";
                    }

                ?>
            </table>
            <p class="fs-4 fw-bold">Liste des étudiants par niveau</p>

            <!--------------------------            L1         ------------------------------>

            <p class="fs-4 fw-bold">L1</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Niveau</th>
                    <th>Parcous</th>
                    <th>Email</th>
                </tr>
                <?php
                    include '../connexionbd.php';
                    $afficher = "SELECT * FROM etudiant where niveau = 'L1'";
                    $resultat = $connexion->query($afficher);
                    $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($ligne as $res){
                        echo "<tr>";
                            echo "<td>".$res['matricule']."</td>";
                            echo "<td>".$res['nom']."</td>";
                            echo "<td>".$res['prenom']."</td>";
                            echo "<td>".$res['niveau']."</td>";
                            echo "<td>".$res['parcours']."</td>";
                            echo "<td>".$res['adr_email']."</td>";
                        echo "</tr>";
                    }
                    echo "<tr>";
                            $total = "SELECT COUNT(*) AS total FROM etudiant where niveau = 'L1'";
                            $result = $connexion->query($total);
                            $r = $result->fetch(PDO::FETCH_ASSOC);

                            $nbrtotal = $r['total'];
                            echo "<td>Nombre total d élèves : </td>";
                            echo "<td>".$nbrtotal."</td>";
                            
                        echo "</td>";
                        echo "</tr>";

                ?>
                </table>

                <!--------------------------            L2         ------------------------------>

                <p class="fs-4 fw-bold">L2</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Niveau</th>
                    <th>Parcous</th>
                    <th>Email</th>
                </tr>
                <?php
                    include '../connexionbd.php';
                    $afficher = "SELECT * FROM etudiant where niveau = 'L2'";
                    $resultat = $connexion->query($afficher);
                    $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($ligne as $res){
                        echo "<tr>";
                            echo "<td>".$res['matricule']."</td>";
                            echo "<td>".$res['nom']."</td>";
                            echo "<td>".$res['prenom']."</td>";
                            echo "<td>".$res['niveau']."</td>";
                            echo "<td>".$res['parcours']."</td>";
                            echo "<td>".$res['adr_email']."</td>";
                        echo "</tr>";
                    }
                    echo "<tr>";
                            $total = "SELECT COUNT(*) AS total FROM etudiant where niveau = 'L2'";
                            $result = $connexion->query($total);
                            $r = $result->fetch(PDO::FETCH_ASSOC);

                            $nbrtotal = $r['total'];
                            echo "<td>Nombre total d élèves : </td>";
                            echo "<td>".$nbrtotal."</td>";            
                        echo "</td>";
                        echo "</tr>";
                ?>
                </table>

                <!--------------------------            L3         ------------------------------>

                <p class="fs-4 fw-bold">L3</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Niveau</th>
                    <th>Parcous</th>
                    <th>Email</th>
                </tr>
                <?php
                    include '../connexionbd.php';
                    $afficher = "SELECT * FROM etudiant where niveau = 'L3'";
                    $resultat = $connexion->query($afficher);
                    $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($ligne as $res){
                        echo "<tr>";
                            echo "<td>".$res['matricule']."</td>";
                            echo "<td>".$res['nom']."</td>";
                            echo "<td>".$res['prenom']."</td>";
                            echo "<td>".$res['niveau']."</td>";
                            echo "<td>".$res['parcours']."</td>";
                            echo "<td>".$res['adr_email']."</td>";
                        echo "</tr>";
                    }
                    echo "<tr>";
                            $total = "SELECT COUNT(*) AS total FROM etudiant where niveau = 'L3'";
                            $result = $connexion->query($total);
                            $r = $result->fetch(PDO::FETCH_ASSOC);

                            $nbrtotal = $r['total'];
                            echo "<td>Nombre total d élèves : </td>";
                            echo "<td>".$nbrtotal."</td>";
                        echo "</td>";
                        echo "</tr>";

                ?>
                </table>

                <!--------------------------            M1         ------------------------------>


                <p class="fs-4 fw-bold">M1</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Niveau</th>
                    <th>Parcous</th>
                    <th>Email</th>
                </tr>
                <?php
                    include '../connexionbd.php';
                    $afficher = "SELECT * FROM etudiant where niveau = 'M1'";
                    $resultat = $connexion->query($afficher);
                    $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($ligne as $res){
                        echo "<tr>";
                            echo "<td>".$res['matricule']."</td>";
                            echo "<td>".$res['nom']."</td>";
                            echo "<td>".$res['prenom']."</td>";
                            echo "<td>".$res['niveau']."</td>";
                            echo "<td>".$res['parcours']."</td>";
                            echo "<td>".$res['adr_email']."</td>";
                        echo "</tr>";
                    }
                        echo "<tr>";
                            $total = "SELECT COUNT(*) AS total FROM etudiant where niveau = 'M1'";
                            $result = $connexion->query($total);
                            $r = $result->fetch(PDO::FETCH_ASSOC);

                            $nbrtotal = $r['total'];
                            echo "<td>Nombre total d élèves : </td>";
                            echo "<td>".$nbrtotal."</td>";
                        echo "</td>";
                        echo "</tr>";
                    

                ?>
                </table>

                <!--------------------------            M2         ------------------------------>
                <p class="fs-4 fw-bold">M2</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Niveau</th>
                    <th>Parcous</th>
                    <th>Email</th>
                </tr>
                <?php
                    include '../connexionbd.php';
                    $afficher = "SELECT * FROM etudiant where niveau = 'M2'";
                    $resultat = $connexion->query($afficher);
                    $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($ligne as $res){
                        echo "<tr>";
                            echo "<td>".$res['matricule']."</td>";
                            echo "<td>".$res['nom']."</td>";
                            echo "<td>".$res['prenom']."</td>";
                            echo "<td>".$res['niveau']."</td>";
                            echo "<td>".$res['parcours']."</td>";
                            echo "<td>".$res['adr_email']."</td>";
                        echo "</tr>";
                    }
                    echo "<tr>";
                            $total = "SELECT COUNT(*) AS total FROM etudiant where niveau = 'M2'";
                            $result = $connexion->query($total);
                            $r = $result->fetch(PDO::FETCH_ASSOC);

                            $nbrtotal = $r['total'];
                            echo "<td>Nombre total d élèves : </td>";
                            echo "<td>".$nbrtotal."</td>";
                        echo "</td>";
                        echo "</tr>";

                ?>
            </table>
        </div>
    </div>
    <div></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="manova">
                    <li><a href="/PROJET/PHP/Liste/prof.php" class="lieen">Professeur</a></li>
                    <li><a href="/PROJET/PHP/Liste/orga.php" class="lieen">Organisme</a></li>
                    <li><a href="/PROJET/PHP/Liste/soutenance.php" class="lieen">soutenance</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include '../footer.php'?>
</body>
</html>