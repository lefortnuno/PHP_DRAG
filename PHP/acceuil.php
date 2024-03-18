<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="indexcss.css">
    <link rel="stylesheet" href="liste.css">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>

    <!------En tete an page iito-->
    <?php include 'nav.php'?>
    <!------Fin En tete an page ito-->

    <!------Début an vatany itooo-->
  <section>
    <div class="container cont">
      <div class="row">
          <p class="text-center fs-2">Bienvenue sur ce site basé sur la gestion d'école et ainsi que des soutenances</p>
      </div>
      <div class="row text-center">
        <p>On peut trouver sur ce sité : </p>
        <ul class="list-group ">
          <li class="list-group-item fs-5">La liste des étudiants, enseignant, organisme, soutenance</li>
          <li class="list-group-item fs-5">L'ajout des étudiants, enseignant, organisme, soutenance</li>
          <li class="list-group-item fs-5">Modification des étudiants, enseignants, organisme, soutenance</li>
          <li class="list-group-item fs-5">Suppression des étudiants, enseignants, organisme, soutenance</li>
        </ul>
      </div>
    </div>
  </section>

    <?php include 'footer.php'?>
</body>
</html>