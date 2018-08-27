// EN ESTE JAVASCRIPT SE DA UNA FUNCION Q TRABAJA CON AJAX PARA MOSTRAR UNA TABLA DE LA BD
function mostrar_tabla() {

    let xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange=function() {
        if (this.readyState === 4 && this.status === 200){
            document.getElementById("tabla_usuarios").innerHTML=this.responseText

        }
    }

    xmlhttp.open("GET","practica01_1.php?q=",true,)

    xmlhttp.send()
}