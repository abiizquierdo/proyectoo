<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_proveedor = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM proveedores WHERE id_proveedor ='$id_proveedor'"; 
    $query = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <style>
    main {
        padding: 10px 30px;
    }
    </style>

    <?php include_once 'header.php'; ?>
    <main>
        <h1>Editar datos del proveedor</h1>

        <label for="">Id:</label>
        <input id="input_idproveedor" type="text" value="<?php echo $result['id_proveedor'] ?>" disabled><br><br>

        </select>
        <br><br>

        <label for="">RUC:</label>
        <input id="input_ruc" type="text" value="<?php echo $result['ruc'] ?>"><br><br>

        <label for="">Razon Social:</label>
        <input id="input_razon_social" type="text" value="<?php echo $result['razon_social'] ?>"><br><br>

        <label for="">Representante legal:</label>
        <input id="input_representante_legal" type="text" value="<?php echo $result['representante_legal'] ?>"><br><br>


        <label for="">Email:</label>
        <input id="input_email" type="text" value="<?php echo $result['email'] ?>"><br><br>

        <label for="">Telefono:</label>
        <input id="input_telefono" type="text" value="<?php echo $result['telefono'] ?>"><br><br>

        <label for="">Celular:</label>
        <input id="input_celular" type="text" value="<?php echo $result['celular'] ?>"><br><br>

        <label for="">Direccion:</label>
        <input id="input_direccion" type="text" value="<?php echo $result['direccion'] ?>"><br><br>

        <label for="">Cuenta bancaria:</label>
        <input id="input_cuenta_bancaria" type="text" value="<?php echo $result['cuenta_bancaria'] ?>"><br><br>

        <label for="">Cuenta CCI:</label>
        <input id="input_cuenta_CCI" type="text" value="<?php echo $result['cuenta_CCI'] ?>"><br><br>
       
        <label for="">Banco:</label>
        <input id="input_banco" type="text" value="<?php echo $result['banco'] ?>"><br><br>
       
       
        <a href="proveedor.php">Regresar</a>
        <button type="button" id="btn_actualizar_proveedor">Actualizar</button>
    </main>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Usuarios JS -->
    <script src="proveedor.js?v=<?php echo rand(); ?>"></script>
</body>

</html>