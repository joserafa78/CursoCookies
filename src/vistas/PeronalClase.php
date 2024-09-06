<?php
// PRACTICANDO HERENCIA E IMPLEMENTACION 
namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\astracta\Humano;
use App\vistas\interfaces\I_humano;
use App\vistas\includes\Header;

new Header; //Crea Cabecera en html


class PersonalClase extends Humano implements I_humano
{
    private $cargo;
    private $estado;
    private $sueldo;
    public function __construct($nombre,  $apellido,  $identificacion, $cargo)
    {
        parent::__construct($nombre,  $apellido,  $identificacion);
        $this->cargo = $cargo;
    }
    //YGETTER
    function getCargo()
    {
        return $this->cargo;
    }

    function getEstado()
    {
        return $this->estado;
    }

    function getSueldo()
    {
        return $this->sueldo;
    }
    //SETTER
    function setCargo($cargo): void
    {
        $this->cargo = $cargo;
    }

    //IMPLEMENTACION 
    function estado(bool $valor)
    {
        $this->estado = $valor;
    }
    function nomina(float $salario)
    {
        $this->sueldo = $salario;
    }
}
$cli1 = new PersonalClase("JOSE", "JIMENES", "16985465", "MOZO");
$cli1->estado(false);
$cli2 = new PersonalClase("MARIA", "GUT", "10005", "MOZO");
$cli2->estado(true);
$cli2->nomina(1250);
echo "<pre>";
print_r("Empleado:" . $cli2->getNombre() . ", Estado es:" . $cli2->getEstado());

//*************************************************************************************** */
use App\vistas\includes\Footer;

new Footer; //Crea el Footer.
