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
    


    <form action="./action/action1.php" method="post" id = "form8">
    <br>
    <br>
    <br>
    
    <br>
    <label for="edad">Edad:</label>
    <input type="text" name="edad" id="edad">
    <br>
    <label for="estudio">Estudio:</label>
    <input type="radio" name="estudios" value="estudio" id="estudio">
    <label for="noestudio">No estudio</label>
    <input type="radio" name="estudios" value="noestudio" id="noestudio">
    <input type="submit" name="enviar" id="enviar">

    </form>




</body>
</html>