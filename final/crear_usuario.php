<?php
    include_once 'config.php';
    include_once 'session.php';

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
    <title>Sistema v2</title>
</head>
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

<body>

    <?php include_once 'header.php'; ?>

    <h1>Crear Usuario</h1>

    <form action="">
        <label for="">Perfil:</label>
        <select name="" id="id_perfil">
            <?php
                foreach($perfiles as $perfil_dato) { ?>
                <option value="<?php echo $perfil_dato['id_perfil'] ?>">
                    <?php echo $perfil_dato['nombre'] ?>
                </option>
                <?php
                }
            ?>
        </select>
        <br><br>

        <label for="">Nombre:</label>
        <input id="nombre" type="text"><br><br>

        <label for="">Apellido:</label>
        <input id="apellido" type="text"><br><br>

        <label for="">Email:</label>
        <input id="email" type="text"><br><br>

        <label for="">DNI:</label>
        <input id="dni" type="text"><br><br>

        <label for="">Password:</label>
        <input id="password" type="text"><br><br>

        <label for="">Direccion:</label>
        <input id="direccion" type="text"><br><br>

        <button type="button" id="btn_crear_usuario">Crear</button>
    </form>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Usuarios JS -->
    <script src="usuarios.js?v=<?php echo rand(); ?>"></script>
</body>

</html>