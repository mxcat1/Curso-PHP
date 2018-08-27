
<!--EN ESTE PHP PEDIMOS ALA BASE DE DATOS MUESTRE LOS DATOS DE LA TABLA USUARIO POR MEDIO DE AJAX-->
<?php
$conexion = new mysqli("localhost","root","XXmxcatXX","pruebas");
if ($conexion->errno){
    die($conexion->error);
}
$sql="select * from usuario";
$consulta = $conexion->query($sql);
echo "<table> <tr><td>Codigo Usuario</td><td>Nombre Usuario</td><td>Contraseña Usuario</td></tr>";
while ($filas=$consulta->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$filas["id_usuario"]."</td>";
    echo "<td>".$filas["nom_usuario"]."</td>";
    echo "<td>".$filas["contra_usuario"]."</td>";
    echo "</tr>";
}
echo " </table>";
$conexion->close();