<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script>
        $(function () {
            $("#ver").click(function () {
                $("#hola").html("Hola Mundo")
                alert("Hola")
            })
        })
    </script>
</head>
<body>
<?php
echo "<h1>Hola Mundo</h1> <br> <p>Bienvenido s PHP</p>"

?>
<button type="button" id="ver" >ver</button>
<span id="hola"></span>

</body>
</html>