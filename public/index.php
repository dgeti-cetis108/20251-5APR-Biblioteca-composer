<?php
require '../vendor/autoload.php';

use Cetis108\Biblioteca\Autor;

$autores = [
    new Autor('Estefania', 'Diaz'),
    new Autor('Nachito', 'Eli'),
    new Autor('Daniel', 'Huicho')
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Autores</h2>
    <ul>
        <?php foreach ($autores as $autor) {
            echo "<li>{$autor->nombreCompleto()}</li>";
        } ?>
    </ul>
</body>
</html>