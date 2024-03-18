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
    <div class="container">
        <div class="row">
            <form method="post" action="traitement_supprimer/traitement_supprimer_etudiant">
                <div class="col-12 text-center">
                    <p class="fs-4">Entrez le numero matricule de l'etudiant à supprimer</p>
                    <p>
                        <label for="Matricule" class="fs-3">Matricule</label>
                        <input type="number" name="Matricule" id="Matricule" class="inp">
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