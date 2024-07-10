<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_usuario = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM usuarios WHERE id_usuario ='$id_usuario'"; 
    $query = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_array($query);

    //Lista de perfiles
    $sql_perfiles = "SELECT * FROM perfiles";
    $result_sql_perfiles = mysqli_query($conexion, $sql_perfiles);
    $perfiles = $result_sql_perfiles->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        padding: 10px 30px;
    }
    </style>

    <?php include_once 'header.php'; ?>
    <main>
        <h1>Editar datos del usuario</h1>

        <label for="">Id:</label>
        <input id="input_idUsuario" type="text" value="<?php echo $result['id_usuario'] ?>" disabled><br><br>

        <label for="">Perfil:</label>
        <select name="" id="input_idPerfil">
            <?php
                foreach($perfiles as $perfil_dato) { 
                    echo '<option value="'.$perfil_dato['id_perfil'].'"';
                    if ($perfil_dato['id_perfil'] == $result['id_perfil']) {
                        echo ' selected';
                    }
                    echo '>'.$perfil_dato['nombre'].'</option>';
                }
            ?>
        </select>
        <br><br>

        <label for="">Nombre:</label>
        <input id="input_nombre" type="text" value="<?php echo $result['nombre'] ?>"><br><br>

        <label for="">Apellido:</label>
        <input id="input_apellido" type="text" value="<?php echo $result['apellido'] ?>"><br><br>

        <label for="">Email:</label>
        <input id="input_email" type="text" value="<?php echo $result['email'] ?>"><br><br>

        <label for="">DNI:</label>
        <input id="input_dni" type="text" value="<?php echo $result['DNI'] ?>"><br><br>

        <label for="">Direccion:</label>
        <input id="input_direccion" type="text" value="<?php echo $result['direccion'] ?>"><br><br>

        <a href="usuarios.php">Regresar</a>
        <button type="button" id="btn_actualizar_usuario">Actualizar</button>
    </main>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Usuarios JS -->
    <script src="usuarios.js?v=<?php echo rand(); ?>"></script>
</body>

</html>