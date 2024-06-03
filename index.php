<?php
  /*include("microservices/notificacion_telegram.php");*/
  include("includes/header.php");
?>

<br><br><br>
<div class="alert alert-danger" role="alert">
  Estamos en mantenimiento, disculpa las molestias.
</div>

<!-- Seccion Hero -->
<section class="hero align-items-stretch">
  <div class="hero-content d-flex flex-column flex-md-row justify-content-center align-items-center">
    <img class="hero-imagen-desarrollador rounded-circle photo-perfil" src="resources/photo_perfil.jpeg" alt="Foto de Junnior Ravelo">
    <div class="text-container">
      <h1></h1>
      <h2>Freelance especializado en el desarrollo de aplicaciones web y de escritorio.</h2>
    </div>
  </div>
</section>



<script>
  //Funcion del cursor en el hero h1
  document.addEventListener("DOMContentLoaded", function() {
    const text = "Hi, I'm Jr Ravelo";
    let i = 0;
    const speed = 90; // Ajusta la velocidad aquí

    function typeWriter() {
      if (i < text.length) {
        document.querySelector(".hero h1").textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      } else {
        // Después de que la animación de escritura termine, remover el cursor
        setTimeout(() => {
          document.querySelector(".hero h1").classList.add('cursor-hidden');
        }, 500); // Espera un poco antes de ocultar el cursor
      }
    }

    typeWriter();
  });
</script>

<!-- Sobre mi -->
<section id="sobre-mi" class="sobre-mi seccion-oscura">
  <div class="contenedor">
    <h2 class="seccion-titulo" style="color: white;">About me</h2>
    <p class="seccion-texto" style="color: white;">¡Hola! Soy un estudiante de ingeniería de sistemas (8vo semestre) con experiencia sólida en desarrollo web, automatización (RPA) y administración de redes. Mi compromiso con la calidad, respaldado por mi conocimiento de los estándares de ISO e IEEE, me ha permitido trabajar eficazmente en equipos empresariales, ofreciendo soluciones creativas y eficientes.
      Me destaco por mi flexibilidad laboral como freelance, así como por mi capacidad para trabajar de manera autónoma y proactiva. Mis habilidades abarcan desde el desarrollo web con Laravel hasta la administración de bases de datos y redes, pasando por el diseño de arquitecturas empresariales y la implementación de automatizaciones con RPA.
      En mi tiempo libre, me apasiona el análisis de datos, el desarrollo de bots y la exploración de aplicaciones de Machine Learning. Si buscas un profesional comprometido, creativo y orientado a resultados en el campo de la ingeniería de sistemas, ¡estoy aquí para ayudarte a alcanzar tus objetivos tecnológicos!</p>
  </div>
</section>

<br>



<!--inconos de redes sociales-->
<div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
  <a href="<?= $whatsapp ?>" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-whatsapp"></i>
  </a>
  <a href="<?= $github ?>" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-github"></i>
  </a>
  <a href="<?= $linkedin ?>" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-linkedin"></i>
  </a>
  <a href="<?= $mailto ?>" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-envelope"></i>
  </a>
</div>

<?php include("includes/footer.php") ?>