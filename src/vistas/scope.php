<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';
use App\vistas\includes\Header;

new Header;
$nombre="CARGANDO VALOR.";
?>

<h1>¿Que Es Scope.?</h1>
<br>
<p>Bla Bla Bla. mas Bla 1 2 3 4 5 .</p>
<br>
<h3>Aqui Probando este Cogido.. vale.. <?= $nombre?></h3>


<?php

use App\vistas\includes\Footer;

new Footer;
?>