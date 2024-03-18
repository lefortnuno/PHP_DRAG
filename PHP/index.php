<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexcss.css">
    <link rel="stylesheet" href="liste.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'nav.php'?>
    <div class="container py-5 text-center tt">
        <div class="row text-center">
            <p class="fs-5">Selectionner la liste souhaitée : </p>
            <div class="col-12 divlien">
                <a href="/PROJET/PHP/Liste/etudiant.php" class="lien fs-5">Etudiants</a>
            </div>
            <div class="col-12 divlien">
                <a href="/PROJET/PHP/Liste/prof.php" class="lien fs-5">Professeurs</a>
            </div>
            <div class="col-12 divlien">
                <a href="/PROJET/PHP/Liste/orga.php" class="lien fs-5">Organisme</a>
            </div>
            <div class="col-12 divlien">
                <a href="/PROJET/PHP/Liste/soutenance.php" class="lien fs-5">soutenance</a>
            </div>
        </div>
        
    </div>
    <?php include 'footer.php'?>
</body>
</html>
