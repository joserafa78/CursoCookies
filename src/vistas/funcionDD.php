<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<h1>¿Como Depurar el Codigo.?</h1>
<br>
<p>Déjame hablarte de una función llamada dump() Básicamente, en Laravel Bueno, Laravel es un framework
    de PHP Muy usado para desarrollar aplicaciones web Muy complejas Pero bueno, en Laravel existe una
    función llamada Dump() Esta función nos ayuda a hacer debugging De una forma increíblemente precisa
    Increíblemente completa Y realmente es muy completa la forma de hacer debugging Con esta función.</p>

<br>
<hr>
<p>Clase Michi Creada.</p>
<?php
echo '<img class="img_contenido" src="' . URL . 'imagen/code.png" />';

class Michi
{

    protected $patas = [];
    protected $color;

    function __construct(string $color)
    {
        $this->color = $color;

        for ($i = 0; $i < 4; $i++) {
            $this->patas[$i] = new PataDeMichi();
        }
    }
}
echo "<p> Clase PataMichi Creada</p> <br>";
echo '<img class="img_contenido" src="' . URL . 'imagen/code1.png" />';
class PataDeMichi
{

    protected $nails = 4;
    protected $description = "Tiene manchitas";

    public function get_description(): string
    {
        return $this->description;
    }
}
echo "<p> Arreglo de Michis Crado</p> <br>";
echo '<img class="img_contenido" src="' . URL . 'imagen/code2.png" />';
$casa_cde_michis = array(
    "nombre" => "Michilango",
    "ubicacion" => [
        "pais" => "Mexico",
        "ciudad" => "Ciudad de Mexico",
        "colonia" => "Doctores",
        "numero" => 27
    ],
    "numero_de_michis" => 3,
    "michis" => [
        new Michi("blanco"),
        new Michi("negro"),
        new Michi("gris")
    ]
);
echo "<p> Depurando con Funicon DD() <br><br>";
//dd($casa_cde_michis);
?>



<?php

use App\vistas\includes\Footer;

new Footer;
?>