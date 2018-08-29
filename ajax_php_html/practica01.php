<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>
    <script !src="">
        function mostrar(valor) {
            let xmlhttp = new XMLHttpRequest()
            xmlhttp.onreadystatechange=function() {
                if (this.readyState === 4 && this.status === 200){
                    document.getElementById("mostrar").innerHTML=this.responseText

                }
            }

            xmlhttp.open("GET","pagin.php?q="+valor,true,)

            xmlhttp.send()
        }
    </script>
</head>
<body>
<form action="pagin.php" method="get">
    <input type="text" name="txtnombre" id="txtnombre" onkeyup="mostrar(this.value)">
</form>
<div id="mostrar">

</div>
</body>
</html>