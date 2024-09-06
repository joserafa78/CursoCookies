<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Footer;
use App\vistas\includes\Header;
use App\vistas\clases\Lector;

new Header;
//**************************** */
?>

<h1>Los NameSpaces</h1>
<p>Aqui encontrara todo el contenido. vale..</p>

<?php
$usuario = new Lector("Barbar", "Jimenez", 16582, "barbara@gmai.com");
$usuario->asignaVisita();
echo "Usuario Lector es: " . $usuario->getNombre() . " Visita N:" . $usuario->totalVisita();

?>

<?php
//*****************FOOTER*************** */
new Footer;
?>