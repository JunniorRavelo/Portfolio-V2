<?php
include("microservices/notificacion_telegram.php");
include("microservices/controller.php");

/*  NOTA IMPORTANTE
$token se puede declara en este archivo, pero por temas de segurida se recomienda declararlo en el archivo controller.php
Este repositorio es publico, por lo que es neccesario ocultar el token
*/

// Ruta al archivo de certificados de CA descargado
$cacert_path = 'D:\xampp\htdocs\portfolio_v2\microservices\certificate\cacert.pem'; // Usa una ruta absoluta

// URL de la API de GitHub para obtener los repositorios públicos donde eres el autor
$url = 'https://api.github.com/user/repos?affiliation=owner';

// Inicializar cURL
$ch = curl_init();

// Configurar opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP'); // GitHub requiere un User-Agent
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: token ' . $token,
    'Accept: application/vnd.github.v3+json',
]);
curl_setopt($ch, CURLOPT_CAINFO, $cacert_path); // Especificar la ruta al archivo de certificados de CA

// Ejecutar solicitud cURL y obtener la respuesta
$response = curl_exec($ch);

// Verificar si hubo un error en la solicitud cURL
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
    curl_close($ch);
    exit;
}

// Verificar el código de respuesta HTTP
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if ($http_code !== 200) {
    echo 'Error: HTTP ' . $http_code . ' - ' . $response;
    curl_close($ch);
    exit;
}

// Cerrar cURL
curl_close($ch);

// Decodificar la respuesta JSON
$repos = json_decode($response, true);

// Verificar si la decodificación JSON fue exitosa
if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error en la decodificación JSON: ' . json_last_error_msg();
    exit;
}

// Verificar si la respuesta es un array
if (!is_array($repos)) {
    echo 'Error: La respuesta no es un array. Respuesta original: ' . $response;
    exit;
}

?>

<?php include("includes/header.php"); ?>

<br><br><br>
<div class="alert alert-danger" role="alert">
    We are undergoing maintenance, sorry for the inconvenience.
</div>

<!-- Proyectos -->
<section id="proyectos" class="proyectos-recientes seccion-clara d-flex flex-column">
    <h2 class="seccion-titulo" style="color: white;">Recent activity</h2>
    <h3 class="seccion-descripcion">The portfolio is being updated, you can see my repositories and modules on GitHub.</h3>

    <!-- Galeria de Proyectos -->
    <div class="container text-center proyectos-contenedor">
        <div class="row">

            <!-- Componente proyecto -->
            <?php
            foreach ($repos as $repo) {
                if (isset($repo['private']) && !$repo['private'] && $repo['owner']['login'] === 'JunniorRavelo') {
            ?>

                    <!-- Componente proyecto -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="proyecto">
                            <img src="https://raw.githubusercontent.com/JunniorRavelo/<?= htmlspecialchars($repo['name']) ?>/main/resources/portada.png" alt="Presentation of <?= htmlspecialchars($repo['name']) ?>">
                            <div class="overlay">
                                <p class="text-light"><?= htmlspecialchars($repo['name']) ?></p>
                                <div class="iconos-contenedor">
                                    <a href="<?= htmlspecialchars($repo['html_url']) ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="bi bi-github text-light"></i>
                                    </a>
                                    <a target="_blank" rel="noopener noreferrer">
                                        <i class="bi bi-filetype-pdf" style="color: gray; opacity: initial;"></i>
                                    </a>
                                    <a href="<?= htmlspecialchars($repo['html_url']) ?>" target="_blank" rel="noopener noreferrer" style="display: none;">
                                        <i class="bi bi-laptop text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <a href="https://github.com/JunniorRavelo" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-outline-light">
            Ver en GitHub
            <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
    </a>

</section>

<?php include("includes/footer.php") ?>
