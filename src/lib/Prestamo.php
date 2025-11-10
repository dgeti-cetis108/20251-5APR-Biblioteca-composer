<?php

namespace Cetis108\Biblioteca\Lib;

class Prestamo {
    public $Id; // PK
    public $UsuarioId; // FK Usuarios(Id)
    public $AlumnoId; // FK Alumnos(Id)
    public $FechaSalida;
    public $FechaRetorno;
}