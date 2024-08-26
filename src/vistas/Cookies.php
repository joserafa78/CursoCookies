<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

// Defini cookies
setcookie(
    name: "header_color",
    value: "#12373d"
);

$color = $_COOKIE["header_color"] ?? "#121f3d";


use App\vistas\includes\Header;

new Header;
?>

<h1>¿Que Son las Cookies.?</h1>
<br>
<p>básicamente las cookies no son más que un pedacito de tu memoria que le prestas a alguna página
    web para guardar cierta información acerca de ti. Sí, las cookies guardan información acerca
    de ti. Realmente es información, suele ser información no sensible, pero suele ser a final
    de cuentas información acerca de ti..</p>
<br>

<div style=" background: <?= $color  ?> ">
    <img src="<?= URL ?>imagen/logo.webp" alt="">
</div>

<?php
echo "<p> Usando El logo del Platzi para Demostrar las Cookies. <br><br><hr>";
echo " CODIGO PARA COOKIES <br>";
echo '<img class="img_contenido" src="' . URL . 'imagen/code3.png" />';
echo "<br>";
echo '<img class="img_contenido" src="' . URL . 'imagen/code4.png" />';
echo "<h3> Definiendo una Cookies segun su domino</h3><br>";
//******************************** */
setcookie(
    name: "example_cookie",
    value: "Michi salvaje",
    expires_or_options: time() + 60 * 60 * 24, // 0 La cookie estara viva mientas la sesion, time() en tiempo inmediato
    path: "/", // url en la que estara disponible la cookie, si se deja solo / la cookie estara disponible ew
    //path : "/configuracion", // url en la que estara disponible la cookie, si se deja solo / la cookie estara disponible ew
    domain: "localhost", // dominio en el que estará disponible
    secure: false, //la cookie podra definirse solo si el dominio tiene ssl
    httponly: true // puede ser accedida desde Front, en flase estara disponible solo en server side
);
echo "Resultado de la Cookies: <br>";
dd($_COOKIE);
?>
<?php

use App\vistas\includes\Footer;

new Footer;
?>