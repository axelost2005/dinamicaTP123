<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../funciones/libreria.js"></script>
</head>
<body>
    

Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario:
    <form action="./action/action1.php" method="post" id="from7">
    <br>
    <label for="num1">Numero1</label>
    <input type="text" id="num1" name="numero1">
    <br>
    <label for="num2">Numero2</label>
    <input type="text" id="num2" name="numero2">

    <select name="operacion" id="form">
        <option value="sumar" name="sumar">sumar</option>
        <option value="multiplicar" name="multiplicar">multiplicar</option>
        <option value="restar" name="restar">restar</option>
    </select>

    <input type="submit" name="enviar" id="enviar">

    </form>




</body>
</html>