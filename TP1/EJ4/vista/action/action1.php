<?php
include_once "../../funciones/datasubmited.php";
include_once "../../control/control.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->edad($datos);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "La edad ingresada es $respuesta";
?>

    
</body>
</html>