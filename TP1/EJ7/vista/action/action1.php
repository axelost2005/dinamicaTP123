<?php
include_once "../../funciones/datasubmited.php";
include_once "../../control/control.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->operacion($datos);

$operacion= $datos['operacion'];
$num1 = $datos['numero1'];
$num2= $datos['numero2'];

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
echo "El resultado de la operacion: $operacion con los numeros $num1 y $num2: es  $respuesta";
?>

    
</body>
</html>