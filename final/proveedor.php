<?php
    include_once 'config.php';
    include_once 'session.php';


    //Lista de usuarios
    $sql_proveedor = "SELECT * FROM proveedores";
    $result_sql_proveedor = mysqli_query($conexion, $sql_proveedor);
    $proveedor = $result_sql_proveedor->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema v2</title>
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
       
    </style>
</head>

<body>
    
    <?php include_once 'header.php'; ?>

    <h1>Gestion de provedores</h1>
    <a href="crear_proveedor.php">Crear proveedor</a>
    <table border="1">
        <thead>
            <tr>
                <th>RUC</th>
                <th>Razon Social</th>
                <th>Representante legal</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th>Cuenta bancaria</th>
                <th>Cuenta CCI</th>
                <th>Banco</th>
                <th>fecha de creacion</th>
                <th>fecha de actualizacion</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($proveedor as $proveedor_dato){ ?>
                <tr>
                    <td> <?php echo $proveedor_dato['ruc'] ?> </td>
                    <td> <?php echo $proveedor_dato['razon_social'] ?> </td>
                    <td> <?php echo $proveedor_dato['representante_legal'] ?> </td>
                    <td> <?php echo $proveedor_dato['email'] ?> </td>
                    <td> <?php echo $proveedor_dato['telefono'] ?> </td>
                    <td> <?php echo $proveedor_dato['celular'] ?> </td>
                    <td> <?php echo $proveedor_dato['direccion'] ?> </td>
                    <td> <?php echo $proveedor_dato['cuenta_bancaria'] ?> </td>
                    <td> <?php echo $proveedor_dato['cuenta_CCI'] ?> </td>
                    <td> <?php echo $proveedor_dato['banco'] ?> </td>
                    <td> <?php echo $proveedor_dato['fecha_creacion'] ?> </td>
                    <td> <?php echo $proveedor_dato['fecha_actualizacion'] ?> </td>
                    <td>
                        <a href="ver_proveedor.php?id=<?php echo $proveedor_dato['id_proveedor']?>">Ver</a>
                        <a href="editar_proveedor.php?id=<?php echo $proveedor_dato['id_proveedor']?>">Editar</a>
                        <a href="#" onclick="eliminar_proveedor('<?php echo $proveedor_dato['id_proveedor']?>')">Eliminar</a>
                    </td>
                </tr>    
            <?php
            }
            ?>
        </tbody>
    </table>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Usuario JS -->
    <script src="proveedor.js?v=<?php echo rand(); ?>"></script>
</body>

</html>