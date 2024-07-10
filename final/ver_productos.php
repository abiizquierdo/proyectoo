<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_producto = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM productos WHERE id_producto ='$id_producto'"; 
    $query = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_array($query);

    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ver_producto.css">
    <title>Document</title>
</head>

<body>
    
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
    
    main {
        padding: 10px 30px;
    }
    </style>

    <?php include_once 'header.php'; ?>
    <main>
        <h1>Ver datos del Productos</h1>

        <label for="">Id:</label>
        <input type="text" value="<?php echo $result['id_producto'] ?>" disabled><br><br>
       
        <label for="">categoria:</label>
        <input type="text" value="<?php echo $result['id_categoria'] ?>" disabled><br><br>

        <label for="">proveedor:</label>
        <input type="text" value="<?php echo $result['id_proveedor'] ?>" disabled><br><br>
        
        <label for="">codigo:</label>
        <input type="text" value="<?php echo $result['codigo'] ?>" disabled><br><br>

        <label for="">nombre:</label>
        <input type="text" value="<?php echo $result['nombre'] ?>" disabled><br><br>

        <label for="">descripcion:</label>
        <input type="text" value="<?php echo $result['descripcion'] ?>" disabled><br><br>

        <label for="">moneda:</label>
        <input type="text" value="<?php echo $result['moneda'] ?>" disabled><br><br>

        <label for="">precio compra:</label>
        <input type="text" value="<?php echo $result['precio_compra'] ?>" disabled><br><br>

        <label for="">precio venta:</label>
        <input type="text" value="<?php echo $result['precio_venta'] ?>" disabled><br><br>

    
        
    </form>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- proveedores.JS -->
    <script src="productos.js?v=<?php echo rand(); ?>"></script>
</body>
<a href="productos.php">Regresar</a>
</html>
