<?php

//Se incluye el archivo con los links de contacto
$json_file = 'public_link.json';

if (file_exists($json_file) && is_readable($json_file)) {
   
    $json_string = file_get_contents($json_file);

    $data = json_decode($json_string, true);

    $whatsapp = $data['whatsapp'];
    $github = $data['github'];
    $linkedin = $data['linkedin'];
    $email = $data['email'];
    $mailto = $data['mailto'];
    $repositories_github = $data['repositories_github'];

} else {
    echo "Error: El archivo $json_file no existe o no se puede leer.";
}

?>

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
  <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
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

          <!-- Boton de inicio -->
          <li class="nav-item">
            <a href="index" class="btn btn-outline-light btn-navbar">About</a>
          </li>

          <!-- Boton de proyectos -->
          <li class="nav-item">
            <a href="projects" class="btn btn-outline-light btn-navbar">Projects</a>
          </li>

          <!-- Boton de contacto -->
          <li class="nav-item">
            <button type="button" class="btn btn-outline-light btn-navbar" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact</button>
          </li>

          <!-- Boton de cambio de tema -->
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
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h2 class="modal-title fs-5 text-light" id="exampleModalLabel">Contact me</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-light">
          <!-- Datos de contacto -->
          <div class="mb-3">
            <label for="basic-url" class="form-label">Email</label>
            <div class="input-group">
              <!-- Agrega el valor del correo electrónico directamente como el valor del atributo 'value' -->
              <input type="text" class="form-control" id="email" aria-describedby="basic-addon3" value="<?= $email ?>" disabled>
              <button type="button" class="btn btn-outline-secondary" id="copyButton">
                <i class="bi bi-clipboard"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- toast -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast bg-dark" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Notificacion</strong>
        <small>Hace 1 segundo</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body text-light">
        Copiado exitosamente
      </div>
    </div>
  </div>

  <script>
    // Selecciona el botón de copia
    var copyButton = document.getElementById('copyButton');
    // Agrega un listener de clic al botón de copia
    copyButton.addEventListener('click', function() {
      // Selecciona el campo de entrada de texto
      var emailField = document.getElementById('email');
      // Habilita temporalmente el campo de entrada
      emailField.removeAttribute('disabled');
      // Selecciona el texto dentro del campo de entrada de texto
      emailField.select();
      // Copia el texto seleccionado al portapapeles
      document.execCommand('copy');
      // Deselecciona el texto
      window.getSelection().removeAllRanges();
      // Cambia el ícono del botón a copia exitosa
      copyButton.innerHTML = '<i class="bi bi-clipboard-check"></i>';
      // Restaura el estado del campo de entrada deshabilitado después de 1 segundo
      setTimeout(function() {
        // Deshabilita nuevamente el campo de entrada
        emailField.setAttribute('disabled', 'disabled');
        // Cambia el ícono del botón a copiar
        copyButton.innerHTML = '<i class="bi bi-clipboard"></i>';
      }, 1000);
    });


    // toast
    document.addEventListener('DOMContentLoaded', function() {
      // Selecciona el botón de copia
      const toastTrigger = document.getElementById('copyButton');
      // Selecciona el toast
      const toastLiveExample = document.getElementById('liveToast');

      // Verifica si ambos elementos existen
      if (toastTrigger && toastLiveExample) {
        // Crea una instancia del toast de Bootstrap con una duración de 2 segundos (2000 milisegundos)
        const toastBootstrap = new bootstrap.Toast(toastLiveExample, {
          delay: 2000 // Duración del toast en milisegundos
        });

        // Agrega un listener de clic al botón de copia
        toastTrigger.addEventListener('click', () => {
          // Muestra el toast
          toastBootstrap.show();
        });
      }
    });
  </script>