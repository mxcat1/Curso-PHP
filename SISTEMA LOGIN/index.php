<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/ajax_login.js"></script>

    <style>
        #login_user{
            width: 40%;
            margin: auto;
            background: antiquewhite;
            border: red 1px solid;
        }
        h1{
            text-align: center;
        }
        #campousuario{

            width: 50%;
            margin: auto;

        }
        #login_contra {

            width: 64%;
            margin: auto;
        }
        #boton{
            text-align: center;
        }
    </style>
</head>
<body>
<!--<form id="frm_login">-->
<!--    <div id="login_user">-->
<!--        <h1>INGRESE SUS DATOS PARA ACCEDER</h1>-->
<!--        <div id="campousuario">-->
<!--            <label for="txtUsuario">USUARIO </label>-->
<!--            <input type="text" name="txtUsuario" id="txtUsuario" placeholder="Nombre de Usuario">-->
<!--        </div>-->
<!--        <br>-->
<!--        <div id="login_contra">-->
<!--            <label for="passUsuario">CONTRASEÑA </label>-->
<!--            <input type="password" name="passUsuario" id="passUsuario" placeholder="Contraseña">-->
<!--        </div>-->
<!--        <br>-->
<!--        <div id="boton">-->
<!--            <input type="submit" value="Iniciar Sesión" id="btnverificar">-->
<!--        </div>-->
<!--        <div id="res">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</form>-->
<?php
session_start();
if (isset($_SESSION["logeo"])){
    echo "<div id=\"res\">".$_SESSION["logeo"]."</div>";
    echo '<button id="btncerrar">CERRAR </button>';
}else{
    include ("form_login.php");
}
?>
</body>
</html>