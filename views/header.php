<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>pc-store</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">PC STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    <ul class="navbar-nav">
    <?php if(!isset($_SESSION["user"])): ?>
        <li class="nav-item">
          <a class="nav-link" href="./views/login.php">Iniciar Sesión</a>
        </li>
    <?php else: ?>
        <li class="nav-item">
          <div class="p-2">
                <?=$_SESSION["user"]["email"]?>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
              </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Configuracion</a></li>
              <!--<li><a class="dropdown-item" href="#">Another action</a></li>-->
              <li>
                <!--<a class="dropdown-item" href="./views/close.php">Cerrar sesion</a>-->
              <!-- Button trigger modal -->
              <a  class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar sesion</a></li>
              </li>
          </ul><div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                <div class="mensaje">
                  <div class="container text-center">
                  Esta seguro de que desea cerrar sesion?
                  </div>
                </div>
                <div class="container px-4 text-center">
        <div class="row gx-2">
            <div class="col">
                <div class="p-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                  <a type="button" class="btn btn-primary" href="./views/close.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>
              </div>
          </div>
      </div>              
            
        </li>
    <?php endif; ?>
    </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>