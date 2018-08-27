<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <script src="practica01_js.js"></script>
</head>
<body>
<form action="insertar_datos.php" method="post">
    <label for="txtNom_usuario">Ingrese el Nombre de Usuario </label>
    <input type="text" name="txtNom_usuario" id="txtNom_usuario">
    <br>
    <label for="txtContra_usuario">Ingrese la Contraseña de su Usuario</label>
    <input type="password" name="txtContra_usuario" id="txtContra_usuario">
    <br>
    <input type="button" value="Mostrar" onclick="mostrar_tabla()">
    <input type="submit" value="Enviar">
</form>
<br>
<div id="tabla_usuarios">
    <h1>Tabla vacia</h1>

</div>

</body>
</html>