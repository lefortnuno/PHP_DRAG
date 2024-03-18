<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PROJET/PHP/indexcss.css">
    <link rel="stylesheet" href="/PROJET/PHP/Liste/liste.css">
    <link rel="stylesheet" href="/PROJET/PHP/modif/modif.css">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../nav.php'?>
    <div class="container">
        <div class="row text-center">
            <p class="fs-5">Selectionner la modification souhaitée : </p>
            <div class="col-12 divlien divlien-ajouter">
                <a href="/PROJET/PHP/modif/ajouter.php" class="lien fs-5 linkk">Ajouter</a>
            </div>
            <div class="col-12 divlien divlien-supprimer">
                <a href="/PROJET/PHP/modif/supprimer.php" class="lien fs-5 linkk">Supprimer</a>
            </div>
            <div class="col-12 divlien divlien-changer">
                <a href="/PROJET/PHP/modif/changer.php" class="lien fs-5 linkk">Changer</a>
            </div>
        </div>
    </div>
    <?php include '../footer.php'?>
</body>
</html>