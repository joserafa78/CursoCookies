<?php

namespace App\vistas\astracta;

class Humano
{
    protected $nombre;
    protected $apellido;
    protected $identificacion;
    // CONSTRUCTOR
    public function __construct($nombre,  $apellido,  $identificacion)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->identificacion = $identificacion;
    }
    // GETTER
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    //  SETTERGETTE
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }

    public function setIdentificacion($identificacion): void
    {
        $this->identificacion = $identificacion;
    }
}
