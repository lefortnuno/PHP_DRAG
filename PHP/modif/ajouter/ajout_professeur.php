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
            <form method="post" action="traitement_ajout/traitement_ajout_professeur.php">
                <div class="col-12 text-center">
                    <p>
                        <label for="nomP" class="fs-3">Nom</label>
                        <input type="text" name="nomP" id="nomP" class="inp">
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p>
                        <label for="prenomP" class="fs-3">Prénom</label>
                        <input type="text" name="prenomP" id="prenomP" class="inp">
                    </p>
                </div>
                <div class="col-12 text-center">
                        <label for="civilite" class="fs-3 fw-bold">Civilité</label><br>
                        <label for="civilite" class="fs-4">Monsieur</label>
                        <input type="radio" name="civilite" id="civilite"value="Monsieur"><br>
                        <label for="civilite" class="fs-4">Mademoiselle</label>
                        <input type="radio" name="civilite" id="civilite" value="Mademoiselle" ><br>
                        <label for="civilite" class="fs-4">Madame</label>
                        <input type="radio" name="civilite" id="civilite" value="Madame">
                </div>
                <div class="col-12 text-center gradee">
                        <label for="grade" class="fs-3 fw-bold">Grade</label><br>
                        <label for="grade" class="fs-4">Professeur titulaire</label>
                        <input type="radio" name="grade" id="grade" value="Professeur titulaire"><br>
                        <label for="grade" class="fs-4">Maitre de conférence</label>
                        <input type="radio" name="grade" id="grade" value="Maitre de conference" ><br>
                        <label for="grade" class="fs-4">Assistant d'enseignement Supérieur et de Recherche</label>
                        <input type="radio" name="grade" id="grade" value="Assistant d enseignement superieur et recherche"><br>
                        <label for="grade" class="fs-4">Docteur HDR</label>
                        <input type="radio" name="grade" id="grade" value="Docteur HDR"><br>
                        <label for="grade" class="fs-4">Docteur en informatique</label>
                        <input type="radio" name="grade" id="grade" value="Docteur en informatique"><br>
                        <label for="grade" class="fs-4">Doctorant en informatique</label>
                        <input type="radio" name="grade" id="grade" value="Doctorant en informatique"><br>
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