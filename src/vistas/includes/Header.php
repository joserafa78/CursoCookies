<?php

declare(strict_types=1);
//_____________NOMBRE DE ESPACIO____________________
namespace App\vistas\includes;

//_____________________________________
class  Header
{
    //METODOS<
    public function __construct()
    {
        if (!isset($_SESSION['mostrar'])) { //Chekea que Variable Este Definida
            $_SESSION['mostrar'] = "todo";  //Sino la Crea.
        }
        $listaOrdenada = [
            array('url' => URL . 'index.php', 'titulo' => 'Inicio'),
            array('url' => URL . 'src/vistas/funcionDD.php', 'titulo' => 'Funcion dd() '),
            array('url' => URL . 'src/vistas/Cookies.php', 'titulo' => 'Cookies'),
            array('url' => URL . 'src/vistas/scope.php', 'titulo' => 'Scope '),
            array('url' => URL . 'src/vistas/sesiones.php', 'titulo' => 'Sesiones'),
            array('url' => URL . 'src/vistas/PeronalClase.php', 'titulo' => 'Personal'),
            array('url' => URL . 'src/vistas/#.php', 'titulo' => 'Fin'),
        ];



?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Curso Cookies Platzi</title>
            <link rel="stylesheet" href="<?= URL ?>src/css/menu.css">
            <link rel="stylesheet" href="<?= URL ?>src/css/footer.css">
            <script defer src="<?= URL ?>src/js/app.js"></script>
        </head>

        <body>

            <header class="header">
                <h1 class="h1">
                    <a href="#" class="a">Curso Platzi.</a>
                </h1>

                <button class="button">
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

                <nav class="nav">

                    <ul class="ul">
                        <?php foreach ($listaOrdenada as $key => $value) : ?>
                            <li class="li"><a href="<?= $value['url'] ?>" class="a"> <?= $value['titulo'] ?> </a></li>

                        <?php endforeach; ?>
                    </ul>

                </nav>
            </header>

            <div id="main-container"> <!--Apertura de Caja main-containeer -->



        <?php
    }
};
        ?>