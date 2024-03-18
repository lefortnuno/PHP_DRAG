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
    <?php include '../nav_soutenir.php'?>
    <div class="container">
        <div class="row py-4 text-center">
            <p class="fs-4 fw-bold">Liste des soutenances</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>idorg</th>
                    <th>Date soutenance</th>
                    <th>Note</th>
                    <th>Président</th>
                    <th>Examinateur</th>
                    <th>Rapporteur_int</th>
                    <th>Rapporteur_ext</th>
                    </tr>    
                    <?php
                        include '../connexionbd.php';
                        $afficher = "SELECT * FROM soutenir ORDER BY matricule ASC";
                        $resultat = $connexion->query($afficher);
                        $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                        foreach($ligne as $res){
                            echo "<tr>";
                                echo "<td>".$res['matricule']."</td>";
                                echo "<td>".$res['id_org']."</td>";
                                echo "<td>".$res['date_soutenance']."</td>";
                                echo "<td>".$res['note']."</td>";
                                echo "<td>".$res['president']."</td>";
                                echo "<td>".$res['examinateur']."</td>";
                                echo "<td>".$res['rapporteur_int']."</td>";
                                echo "<td>".$res['rapporteur_ext']."</td>";
                            echo "</tr>";
                        }

                    ?>        
                </table>
        </div>
    </div>
    <div class="container">
        <div class="row py-4 text-center">
            <p class="fs-4 fw-bold">Liste des etudiants pas encore soutenus</p>
            <table class="table table-striped-columns py-2">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Niveau</th>
                    <th>Parcours</th>
                    <th>Email</th>
                </tr>
                <?php
                    include '../connexionbd.php';
                    $rr = "SELECT * from etudiant WHERE matricule NOT IN (SELECT matricule FROM soutenir WHERE note IS NOT NULL) ORDER BY matricule ASC";
                    $rr_res = $connexion->query($rr);
                    $lignes = $rr_res->fetchAll(PDO::FETCH_ASSOC);

                    foreach($lignes as $lignee){
                        echo "<tr>";
                            echo "<td>".$lignee['matricule']."</td>";
                            echo "<td>".$lignee['nom']."</td>";
                            echo "<td>".$lignee['prenom']."</td>";
                            echo "<td>".$lignee['niveau']."</td>";
                            echo "<td>".$lignee['parcours']."</td>";
                            echo "<td>".$lignee['adr_email']."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row py-4 text-center">
            <p class="fs-4 fw-bold">Liste des notes entre deux dates</p>
            <form method="POST" action="/PROJET/PHP/Liste/note.php">
                <p>
                    <label for="datei" >Date initiale</label>
                    <input type="date" name="datei" id="datei" min="2023-01-01" max="2024-12-31">
                </p>
                <p>
                    <label for="datef">Date finale</label>
                    <input type="date" name="datef" id="datef" min="2023-01-01" max="2024-12-31">
                </p>
                <p>
                    <input type="submit" value="Confirmer">
                </p>
            </form>  
                    <!-- <table>
                    <?php
                        // include '../connexionbd.php';
                        // $afficher = "SELECT * FROM soutenir";
                        // $resultat = $connexion->query($afficher);
                        // $ligne = $resultat->fetchAll(PDO::FETCH_ASSOC);
                        // foreach($ligne as $res){
                        //     echo "<tr>";
                        //         echo "<td>".$res['matricule']."</td>";
                        //         echo "<td>".$res['id_org']."</td>";
                        //         echo "<td>".$res['date_soutenance']."</td>";
                        //         echo "<td>".$res['president']."</td>";
                        //         echo "<td>".$res['examinateur']."</td>";
                        //         echo "<td>".$res['rapporteur_int']."</td>";
                        //         echo "<td>".$res['rapporteur_ext']."</td>";
                        //     echo "</tr>";
                        // }
                    ?>        
                </table> -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">   
                <ul class="manova">
                    <li><a href="/PROJET/PHP/Liste/etudiant.php" class="lieen">Etudiant</a></li>
                    <li><a href="/PROJET/PHP/Liste/prof.php" class="lieen">Professeur</a></li>
                    <li><a href="/PROJET/PHP/Liste/orga.php" class="lieen">Organisme</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include '../footer.php'?>
</body>
</html>