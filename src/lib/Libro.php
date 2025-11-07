<?php

namespace Cetis108\Biblioteca;

class Libro {
    public $Id; // PK
    public $Titulo;
    public $Edicion;
    public $ISBN;
    public $Portada;
    public $Sinopsis;
    public $EditorialId; // FK -> Editoriales(Id) N:1
}