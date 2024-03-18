<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PROJET/PHP/indexcss.css">
    <link rel="stylesheet" href="/PROJET/PHP/Liste/liste.css">
    <link rel="stylesheet" href="/PROJET/PHP/modif/modif.css">
    <link rel="stylesheet" href="/PROJET/PHP/modif/ajouter/ajout.css">
    <link rel="stylesheet" href="/PROJET/PHP/modif/supprimer/suppr.css">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include '../../nav.php'?>
    <div class="container mt-5">
        <div class="row text-start">
            <form method="post" action ="/PROJET/PHP/modif/changer/traitement_changer/traiitement_changer_soutenir.php">
                <div class="col-12 text-center">
                    <p>
                        <label for="matricule" class="fs-3">Matricule</label>
                        <input type="number" name="matricule" id="matricule" class="inp">
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p class="fs-4">Remplisez celle que vous voulez modifier</p>
                    <p>
                        <label for="note" class="fs-3">Note</label>
                        <input type="number" name="note" id="note" class="inp" min="0" max="20">
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p class="fs-3">
                        <label for="president">Président</label>
                        <select class="inp" id="president" name="president">
                            <?php
                                include '../../connexionbd.php';
                                $requete = "SELECT * FROM professeur ORDER BY prenom ASC";
                                $res = $connexion->query($requete);
                                $lignes = $res->fetchAll(PDO::FETCH_ASSOC);
                                echo "<option> </option>";
                                foreach($lignes as $ligne){
                                    echo "<option value='".$ligne['prenom']."'>".$ligne['prenom']."</option>";
                                }
                            ?>
                        </select>
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p class="fs-3">
                    <label for="examinateur">Examinateur</label>
                        <select class="inp" id="examinateur" name="examinateur">
                            <?php
                                include '../../connexionbd.php';
                                $requete = "SELECT * FROM professeur";
                                $res = $connexion->query($requete);
                                $lignes = $res->fetchAll(PDO::FETCH_ASSOC);

                                    echo "<option> </option>";
                                foreach($lignes as $ligne){
                                    echo "<option value='".$ligne['prenom']."'>".$ligne['prenom']."</option>";
                                }
                            ?>
                        </select>
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p class="fs-3">
                    <label for="rapporteur_int">Rapporteur int</label>
                        <select class="inp" id="rapporteur_int" name="rapporteur_int">
                            <?php
                                include '../../connexionbd.php';
                                $requete = "SELECT * FROM professeur";
                                $res = $connexion->query($requete) or die(print_r($connexion->errorInfo(), true));
                                $lignes = $res->fetchAll(PDO::FETCH_ASSOC);
                                echo "<option> </option>";
                                foreach($lignes as $ligne){
                                    echo "<option value='".$ligne['prenom']."'>".$ligne['prenom']."</option>";
                                }
                            ?>
                        </select>
                    </p>
                </div>
                <div class="col-12 text-center">
                        <p>
                            <label for="rapporteur_ext" class="fs-3">Rapporteur ext</label>
                            <input type="text" name="rapporteur_ext" id="rapporteur_ext" class="inp">
                        </p>
                </div>
                <div class="col-12 text-center">
                    <input type="submit" value="Confirmer" class="btnvalid">
                </div>
                <p class="inn class fs-3 text-center mt-5" style="color: red !important;"></p>
            </form>
        </div>
    </div>
    <?php include '../../footer.php'?>
    <script>
        
        var submit = document.querySelector('.btnvalid');
        var p = document.querySelector('.inn');
        submit.addEventListener('click', non);

        function non(e){
            var x = document.querySelector('#rapporteur_int').value;
            var y = document.querySelector('#examinateur').value;
            var z = document.querySelector('#president').value;
            if(x === y || x === z || y === z){
                if(x == "" || y=="" || z==""){
                    break;
                }
                else{
                    e.preventDefault();
                    p.innerHTML  = "Le président, examinateur et rapporteurs ne peuvent pas etre la meme personne";
                    var etat = true;
                }
            }
            else{
                etat = false;
                p.innerHTML  = "";
            }
        }
    </script>
</body>
</html>