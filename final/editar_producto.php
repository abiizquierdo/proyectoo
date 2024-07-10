<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_producto = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM productos WHERE id_producto ='$id_producto'"; 
    $query = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_array($query);

    $sql_proveedores = "SELECT * FROM proveedores";
    $result_sql_proveedores = mysqli_query($conexion, $sql_proveedores);
    $proveedores = $result_sql_proveedores->fetch_all(MYSQLI_ASSOC);

    $sql_categorias = "SELECT * FROM categorias";
    $result_sql_categorias = mysqli_query($conexion, $sql_categorias);
    $categorias = $result_sql_categorias->fetch_all(MYSQLI_ASSOC);
   


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editar_producto.css">
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
        <h1>Editar datos del productos</h1>
        

        <label for="">Id:</label>
        <input id="input_idProducto" type="text" value="<?php echo $result['id_producto'] ?>" disabled><br><br>

        <label for="">Categorias:</label>
        <select name="" id="input_idCategoria">
            <?php
                foreach($categorias as $categoria_dato) { 
                    echo '<option value="'.$categoria_dato['id_categoria'].'"';
                    if ($categoria_dato['id_categoria'] == $result['id_categoria']) {
                        echo ' selected';
                    }
                    echo '>'.$categoria_dato['nombre_categoria'].'</option>';
                }
            ?>
        </select>
        <br><br>

        <label for="">proveedor:</label>
        <select name="" id="input_idProveedor">
            <?php
                foreach($proveedores as $proveedor_dato) { 
                    echo '<option value="'.$proveedor_dato['id_proveedor'].'"';
                    if ($proveedor_dato['id_proveedor'] == $result['id_proveedor']) {
                        echo ' selected';
                    }
                    echo '>'.$proveedor_dato['ruc'].'</option>';
                }
            ?>
        </select>
        <br><br>

        <label for="">codigo:</label>
        <input id="input_codigo" type="text" value="<?php echo $result['codigo'] ?>"><br><br>

        <label for="">Nombre:</label>
        <input id="input_nombre" type="text" value="<?php echo $result['nombre'] ?>"><br><br>

        <label for="">descripcion:</label>
        <input id="input_descripcion" type="text" value="<?php echo $result['descripcion'] ?>"><br><br>

        <label for="">moneda:</label>
        <input id="input_moneda" type="text" value="<?php echo $result['moneda'] ?>"><br><br>

        <label for="">precio compra:</label>
        <input id="input_preciocompra" type="text" value="<?php echo $result['precio_compra'] ?>"><br><br>

        <label for="">precio  venta:</label>
        <input id="input_precioventa" type="text" value="<?php echo $result['precio_venta'] ?>"><br><br>

       
        
        

        <a href="productos.php">Regresar</a>
        <button type="button" id="btn_actualizar_producto">Actualizar</button>
    </main>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Usuarios JS -->
    <script src="productos.js?v=<?php echo rand(); ?>"></script>
</body>

</html>