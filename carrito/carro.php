<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos en el carrito</h1>
    
    <?php
     require("conet.php");
    // Simulación de productos desde una base de datos
    $productos = [
        ['idproducto_id' => 2, 'producto_nombre' => 'producto_nombre', 'precio' => 10.00],
        
    ];

    // Mostrar la lista de productos
    foreach ($productos as $producto) {
        echo '<div>';
        echo '<h3>' . $producto['producto_nombre'] . '</h3>';
        echo '<p>Precio: $' . $producto['precio'] . '</p>';
        echo '<a href="funcionar.php?id=' . $producto['idproducto_id'] . '">Agregar al carrito</a>';
        echo '</div>';
    }
    ?>
</body>
</html>
