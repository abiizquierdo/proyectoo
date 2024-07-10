<?php
include_once 'config.php';
include_once 'session.php';

// Lista de productos
$sql_productos = "SELECT * FROM productos";
$result_sql_productos = mysqli_query($conexion, $sql_productos);
$productos = $result_sql_productos->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productos.css">
    
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    background-color: #d3677e;
    color: #fff;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header button {
    background-color: #ed7581;
    color: #fff;
    border: none;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 4px;
    float: right;
}

header button:hover {
    background-color: #de6d79;
}

header ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

header ul li {
    display: inline;
    margin-right: 20px;
}

header ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s ease;
}

header ul li a:hover {
    color: #cce5ff;
}

       
   
    main {
        text-align: center;
    }
    </style>
    <title>Sistema v2</title>
</head>
<body>
    <?php include_once 'header.php'; ?>
    <h1>Gestión de Productos</h1>
    <a href="crear_productos.php">Crear Producto</a>
    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Categoria</th>
                <th>Proveedor</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Moneda</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto_dato) { ?>
                <tr>
                    <td> <?php echo $producto_dato['id_producto'] ?> </td>
                    <td> <?php echo $producto_dato['id_categoria'] ?> </td>
                    <td> <?php echo $producto_dato['id_proveedor'] ?> </td>
                    <td> <?php echo $producto_dato['codigo'] ?> </td>
                    <td> <?php echo $producto_dato['nombre'] ?> </td>
                    <td> <?php echo $producto_dato['moneda'] ?> </td>
                    <td>
                        <a href="ver_productos.php?id=<?php echo $producto_dato['id_producto']?>">Ver</a>
                        <a href="editar_producto.php?id=<?php echo $producto_dato['id_producto']?>">Editar</a>
                        <a href="#" onclick="eliminar_producto('<?php echo $producto_dato['id_producto']?>')">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Producto JS -->
    <script src="productos.js?v=<?php echo rand(); ?>"></script>
</body>
</html>
