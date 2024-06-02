<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-356TG887LX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-356TG887LX');
  </script>

  <!-- Metadatos -->
  <meta charset="utf-8">
  <meta name="author" content="Junnior Santiago Ravelo Velasco">
  <meta name="description" content="Portafolio de Jr Ravelo">
  <meta name="keywords" content="Freelance, Cucuta, Sistemas, Norte de Santander, Ingeniero">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Titulo -->
  <title>Jr Santiago | Ing. Sistemas</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="imagenes/icono.png">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Iconos de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- CSS -->
  <link href="style.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Barra de navegacion -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <div class="navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="index" class="btn btn-outline-light btn-navbar">About</a>
          </li>




          <li class="nav-item">
            <a href="projects" class="btn btn-outline-light btn-navbar">Projects</a>
          </li>

          <li class="nav-item">
            <button type="button" class="btn btn-outline-light btn-navbar" data-toggle="modal" data-target="#exampleModal">Contact</button>
          </li>

          <li class="nav-item" style="display: none;">
            <button type="button" class="btn btn-outline-light btn-navbar btn-navbar-systemColor">
              <i class="bi bi-moon"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ejemplo modal</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>