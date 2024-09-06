<?php

namespace App\vistas\clases;

use App\vistas\astracta\Humano;
use App\vistas\interfaces\I_lector as InterfaceLector; //Usando Name sapace.. y Alias.

class Lector extends Humano implements InterfaceLector
{
    private $email;
    private $num_visita;
    public function __construct($nombre,  $apellido,  $identificacion, $email)
    {
        parent::__construct($nombre,  $apellido,  $identificacion);
        $this->email = $email;
    }
    //SETTER Y GETTER
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    private function setNumVisita($num_visita): void
    {
        $this->num_visita = $num_visita;
    }

    public function getEmail()
    {
        return $this->email;
    }

    private function getNumVisita()
    {
        return $this->num_visita;
    }


    //IMPLEMENTACION
    function asignaVisita()
    {
        $this->setNumVisita(1);
    }
    function totalVisita()
    {
        echo $this->getNumVisita();
    }
}
