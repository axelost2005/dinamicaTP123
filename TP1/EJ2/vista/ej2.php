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
    

    <form action="./action/action1.php" method="get" id="formulario2">

    <h1>HORAS CURSAR</h1>

    <label for="lunes">LUNES</label>
    <input type="text" name="lunes" id="lunes" required> 
    <label for="martes">MARTES</label>
    <input type="text" name="martes" id="martes"required>
    <label for="miercoles">MIERCOLES</label>
    <input type="text" name="miercoles" id="miercoles"required>
    <label for="jueves">JUEVES</label>
    <input type="text" name="jueves" id="jueves"required>
    <label for="viernes">viernes</label>
    <input type="text" name="viernes" id="viernes"required>
    <br>

    <input type="submit" name="enviar" id="enviar">

    </form>




</body>
</html>