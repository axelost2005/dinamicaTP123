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
    

    <form action="./action/action1.php" method="post" id="formulario3">
    <label for="nombre">nombre</label>
   <input type="text" name="nombre" id="nombre" >

   <label for="apellido">apellido</label>
   <input type="text" name="apellido" id="apellido">

   <label for="edad">edad</label>
   <input type="number" name="edad" id="edad">

   <label for="direccion">direccion</label>
   <input type="text" name="direccion" id="direccion">

    <input type="submit" name="enviar" id="enviar">

    </form>




</body>
</html>