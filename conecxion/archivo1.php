<?php

$a=$_GET['correo'];
$b=$_GET['clave'];

echo autenticar("$a","$b");

function autenticar($correo,$clave)
{
    require("archivo3.php");
    $salida="";
    $imprimir = "SELECT * from tb_usuarios where usuario_correo='$correo' and usuario_contrasena='$password'";
    $sql = $conexion->query("$imprimir");
    while($fila= $sql->fetch_assoc())
    {
        $salida.= "<tr>";
        $salida.="<th>". $fila['id_usuario']." <th>";
        $salida.= "<th>".$fila['usuario_nombre']." <th>";
        $salida.= "<th>".$fila['usuario_correo']." <th>";
        $salida.= "<th>".$fila['usuario_contrasena']." <th>";
        $salida.= "<th>".$fila['categoria_nombre']."<th>";
        $salida.= "</tr>";

    }
    $conexion->close();
    return $salida;
}
?>
<html>
    <body>
        <table>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>contraseña</th>
                <th>categoria</th>
            </tr>
        </table>
    </body>



