<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formulario</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../funciones/libreria.js"></script>
</head>
<body>
    
    <form id="registroForm" action="./action/action1.php" method="post">
        <label for="numero">Ingrese número:</label>
        <input type="text" name="numero" id="numero">
        <br>

        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>

</body>
</html>
