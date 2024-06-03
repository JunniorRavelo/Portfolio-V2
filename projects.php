<?php
/*include("microservices/notificacion_telegram.php");*/
include("includes/header.php");
?>

<br><br><br>
<div class="alert alert-danger" role="alert">
    Estamos en mantenimiento, disculpa las molestias.
</div>
<!-- Proyectos -->
<section id="proyectos" class="proyectos-recientes seccion-clara d-flex flex-column">
    <h2 class="seccion-titulo" style="color: white;">Actividad reciente</h2>
    <!--<h3 class="seccion-descripcion">Estos son algunos proyectos y modulos que he creado y/o colaborado recientemente...</h3>-->
    <h3 class="seccion-descripcion">Se esta actualizando el portafolio, puedes ver mis repositorios y modulos en GitHub.</h3>

    <!-- Galeria de Proyectos -->
    <div class="container text-center proyectos-contenedor">
        <div class="row">

            <!-- Componenten proyecto -->
            <div class="col-12 col-md-6 col-lg-4" ">
                <div class=" proyecto">
                <img src="https://raw.githubusercontent.com/JunniorRavelo/<? $name_project ?>/main/resources/photo_perfil.jpeg" alt="Presetation of <? $name_project ?> ">
                <div class="overlay">
                    <p>Lista de tareas PHP</p>
                    <div class="iconos-contenedor">
                        <a href="https://github.com/JunniorRavelo/phpToDo" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-github"></i>
                        </a>

                        <a href="https://jrravelo.site/project_phpToDo/" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-filetype-pdf"></i>
                        </a>

                        <a href="https://jrravelo.site/project_phpToDo/" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-laptop"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <a href="<?= $repositories_github ?>" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-info">
            Ver en GitHub
            <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
    </a>

</section>

<?php include("includes/footer.php") ?>