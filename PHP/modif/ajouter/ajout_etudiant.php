<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PROJET/PHP/indexcss.css">
    <link rel="stylesheet" href="/PROJET/PHP/Liste/liste.css">
    <link rel="stylesheet" href="/PROJET/PHP/modif/modif.css">
    <link rel="stylesheet" href="/PROJET/PHP/modif/ajouter/ajout.css">
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
            <form method="post" action="/PROJET/PHP/modif/ajouter/traitement_ajout/traitement_ajout_etudiant.php">
                    <div class="col-12 text-center">
                        <p class="fs-3 text-center">
                            <label for="nom" class="fs-3">Nom</label>
                            <input type="text" name="nom" id="nom" class="inp">
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="fs-3 text-center">
                            <label for="prenom" class="fs-3">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="inp">
                        </p>
                    </div>
                    <div class="col-12 text-center">
                            <p class="fs-3 text-center">Niveau : 
                            <label for="lvl" class="fs-3">L1</label>
                            <input type="radio" name="lvl" id="lvl" value="L1">
                            <label for="lvl" class="fs-3">L2</label>
                            <input type="radio" name="lvl" id="lvl" value="L2">
                            <label for="lvl" class="fs-3">L3</label>
                            <input type="radio" name="lvl" id="lvl" value="L3">
                            <label for="lvl" class="fs-3">M1</label>
                            <input type="radio" name="lvl" id="lvl" value="M1">
                            <label for="lvl" class="fs-3">M2</label>
                            <input type="radio" name="lvl" id="lvl" value="M2">
                            </p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="fs-3 text-center">Parcours : 
                            <label for="Parcours" class="fs-3">GB</label>
                            <input type="radio" name="Parcours" id="Parcours" value="GB">
                            <label for="Parcours" class="fs-3">SR</label>
                            <input type="radio" name="Parcours" id="Parcours" value="SR">
                            <label for="Parcours" class="fs-3">IG</label>
                            <input type="radio" name="Parcours" id="Parcours" value="IG">
                            </p>
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="fs-3 text-center">
                            <label for="Email" class="fs-3">Email</label>
                            <input type="text" name="Email" id="Email" class="inp">
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <input type="submit" value="Confirmer" class="btnvalid">
                    </div>
            </form>
        </div>
    </div>
    <?php include '../../footer.php'?>
</body>
</html>