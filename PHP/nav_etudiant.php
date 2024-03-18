<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">  
      <a class="navbar-brand" href="#"><span class="logo bg-gradient p-1 rounded-3 text-light">School</span><br>Managment</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-end" id="navbarTogglerDemo03">
          <form method="post" action="/PROJET/PHP/Liste/recherche/traitement_recherche_etudiant.php" class="d-flex  form-search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="chercher">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <ul class="navbar-nav mb-5 mt-2 mb-lg-0 ll">
            <li class="nav-item">
              <a class="nav-link active fs-4" aria-current="page" href="/PROJET/PHP/acceuil.php">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4" href="/PROJET/PHP/index.php">Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4" href="/PROJET/PHP/modif/Modif.php">Modification</a>
            </li>
          </ul>       
        </div>
    </div>
  </nav>
</header>