<?php
session_start();

// Verificar si existe una sesión para el carrito
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Manejar la acción de agregar producto al carrito
if (isset($_GET['idproducto_id'])) {
    $productoId = $_GET['idproducto_id'];
    
    // Simulación de productos desde una base de datos
    $producto = [
        'idproducto_id' => $productoId,
        'producto_nombre' => 'Producto ' . $productoId,
        'precio' => 10.00,
    ];
    
    // Agregar el producto al carrito
    $_SESSION['carrito'][] = $producto;
}

// Mostrar el carrito de compras
?>
<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    
    <a href="carro.php">Volver a la lista de productos</a>

    <h2>Productos en el carrito:</h2>
    <ul>
        <?php
        foreach ($_SESSION['carrito'] as $producto) {
            echo '<li>' . $producto['producto_nombre'] . ' - $' . $producto['precio'] . '</li>';
        }
        ?>
    </ul>
</body>
</html>
