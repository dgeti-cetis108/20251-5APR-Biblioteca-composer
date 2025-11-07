<?php

namespace Cetis108\Biblioteca;

class Autor {
    public $Id; // PK
    public $Nombres;
    public $Apellidos;

    public function __construct($nombres, $apellidos) {
        $this->Nombres = $nombres;
        $this->Apellidos = $apellidos;
    }

    public function nombreCompleto():string {
        return "{$this->Nombres} {$this->Apellidos}";
    }
}