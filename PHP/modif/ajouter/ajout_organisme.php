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
    <div class="container">
        <div class="row text-start">
            <form  method="post" action="traitement_ajout/traitement_ajout_organisme">
                <div class="col-12 text-center">
                    <p>
                        <label for="design" class="fs-3">Designation</label>
                        <input type="text" name="design" id="design" class="inp">
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p>
                        <label for="Lieu" class="fs-3">Lieu</label>
                        <input type="text" name="Lieu" id="Lieu" class="inp">
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