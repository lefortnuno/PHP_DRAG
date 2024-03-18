<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/PROJET/PHP/indexcss.css">
    <link rel="stylesheet" href="/PROJET/PHP/Liste/liste.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../nav_etudiant.php'?>
    <div class="container">
        <div class="row py-4 text-center">
            <p class="fs-4 fw-bold">Liste des etudiant pas encore soutenus</p>
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
                    $rr = "SELECT * from etudiant WHERE matricule NOT IN (SELECT matricule FROM soutenir WHERE note IS NOT NULL";
                    $rr_res = $connexion->exec($rr);
                    $lignes = $rr_res->fetchAll(PDO::FETCH_ASSOC);

                    foreach($lignes as $ligne){
                        echo "<td>""</td>";
                        echo "<td>""</td>";
                        echo "<td>""</td>";
                        echo "<td>""</td>";
                        echo "<td>""</td>";
                        echo "<td>""</td>";
                    }
                ?>
            </table>
        </div>
    </div>
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