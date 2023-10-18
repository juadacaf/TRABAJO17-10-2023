<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Productos <style>*{text-align: center;font-family: Arial, Helvetica, sans-serif;}</style></h1>
        <table>
            <tr>
                <th>Codiogo</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Caracteristicas</th>
                <?php include("conexion.php") ;
                echo(productos($conexion,$producto));
                ?>
            <tr>
        </table>
        <h1>Usuarios</h1>
        <table>
            <tr>
                <th>Codiogo</th>
                <th>Nombre</th>
                <th>correo</th>
                <th>contraseña</th>
                <th>categoria</th>
                <?php
                echo(usuarios($conexion,$usuario));
                ?>
            <tr>
        </table>
            <h1>Factura</h1>
        <table>
            <tr>
                <th>Codiogo de factura</th>
                <th>Nombre del producto</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Caracteristicas</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>Cliente</th>
                <?php
                echo(compra($conexion,$compra));
                ?>
            <tr>
        </table>

        
    </body>
    
</html>



