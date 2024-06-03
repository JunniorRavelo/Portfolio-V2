<?php
/*include("microservices/notificacion_telegram.php");*/
include("includes/header.php");
?>

<br><br><br>
<div class="alert alert-danger" role="alert">
  We are undergoing maintenance, sorry for the inconvenience.
</div>

<!-- Seccion Hero -->
<section class="hero align-items-stretch">
  <div class="hero-content d-flex flex-column flex-md-row justify-content-center align-items-center">
    <img class="hero-imagen-desarrollador rounded-circle photo-perfil" src="resources/photo_perfil.jpeg" alt="Foto de Junnior Ravelo">
    <div class="text-container">
      <h1></h1>
      <h2>Freelancer proficient in web and desktop development, semi-senior in network and database administration.</h2>
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
    <p class="seccion-texto" style="color: white;">

      Hello! I am a Systems Engineering student (8th semester) with solid experience in web development,
      automation (RPA), and network administration. My commitment to quality, backed by my knowledge of ISO
      and IEEE standards, has enabled me to work effectively in corporate teams, providing creative and efficient
      solutions. I excel in flexible freelance work as well as in my ability to work autonomously and proactively.
      My skills range from web development with Laravel to database and network administration, encompassing
      enterprise architecture design and RPA implementation. In my free time, I am passionate about data analysis,
      bot development, and exploring Machine Learning applications. If you are looking for a committed, creative,
      and results-oriented professional in the field of systems engineering, I am here to help you achieve your
      technological goals!

    </p>
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