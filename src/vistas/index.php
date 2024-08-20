<?php
require_once 'config.php';

use App\vistas\includes\Header;

new Header;
?>
<h1>Curso de Cookies y Sesiones en Plazti.</h1>
<br>
<hr>
<p>Aqui encontraras todos los ejercicioes del Curso platzi.</p>
<?php
echo "<br>";
echo '<img class="img_contenido" src="' . URL . 'imagen/portada.png" />';
echo "<br>";
echo "<p>Nunca pares de aprender  </p>";
?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>