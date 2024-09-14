<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';
// ARREGLO DE USUARIO
$users = [
    array("usuario" => "Joserafa78", "email" => "joserafa@gmai.com"),
    array("usuario" => "nailaU", "email" => "nai@gmail.com"),
    array("usuario" => "dali", "email" => "dalila@gmail.com"),
    array("usuario" => "graci", "email" => "chela@gmail.com"),
    array("usuario" => "Anonimo", "email" => "anonimo@gmail.com")
];

$estado = false;
$mensaje = "";
$colorAlert = "primary";
if (isset($_POST["envia"])) {
    $Num_user = $_POST["numero"];
    if (($_POST["nombre"] === $users[$Num_user]["usuario"])) {

        $nombre = $_POST["nombre"];
        $numero = $_POST["numero"];
        $estado = true;
        $mensaje = "Bienvenido Inicio Sesion: " . $nombre;
        $colorAlert = "primary";
        //inicia sesion.
        session_start();
        $_SESSION['usuario'] = array(
            "id" => 1,
            "nombre" => $nombre,
            "numero" => $numero
        );
    } else {
        $nombre = "";
        $numero = "";
        $estado = true;
        $mensaje = "Error Sesion.";
        $colorAlert = "warning";
    }
}

use App\vistas\includes\Header;

new Header;
?>

<h1> Formulario usando Sesiones.</h1>
<div class="row">
    <div class="col-md-4">
        <!-- alerta -->
        <?php if ($estado): ?>
            <div class="alert alert-<?= $colorAlert ?> alert-dismissible fade show" role="alert">
                <strong>Mensaje: </strong> <?= $mensaje ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php else: ?>

        <?php endif; ?>
        <!-- fin alerta -->

        <div class='card card-body'>
            <form action=' <?= htmlspecialchars($_SERVER['PHP_SELF']) ?> ' method='post' name='form'>
                <!-- Contenido -->
                <div class='form-group'>
                    <label for=''>Nombre</label>
                    <input type='text' id='' placeholder='Nombre' name='nombre' class='form-control'><br>
                </div>
                <div class='form-group'>
                    <label for=''>Numero</label>
                    <input type='number' id='' placeholder='Numero' name='numero' class='form-control'><br>
                </div>
                <!-- Botones y sus Clases-->
                <!-- primaryDe,secondaryDeg,successDeg,warningDeg ,dangerDeg-->
                <input type='reset' id='' value='Resetear' onclick='' class='btn btn-primary'>
                <input type='submit' id='' value='enviar' onclick='' name='envia' class='btn btn-primary'>
            </form>
        </div><br>
        </dev>
        <div class="col-md-8"></div>
    </div>
    <?php

    use App\vistas\includes\Footer;

    new Footer;
    ?>