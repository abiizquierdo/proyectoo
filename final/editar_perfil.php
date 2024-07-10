<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_perfil = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM perfiles WHERE id_perfil ='$id_perfil'"; 
    $query = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_array($query);

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
        text-align: center;
    }
    </style>

    <?php include_once 'header.php'; ?>
    <main>
        <h1>EDITAR PERFIL</h1>
        <label for="">Id:</label>
        <input id="id_perfil" type="text" value="<?php echo $result['id_perfil'] ?>" disabled><br><br>

        <label for="">Nombre del Rol:</label>
        <input id="nombre_perfil" type="text" value="<?php echo $result['nombre'] ?>"><br><br>

        <a href="perfiles.php">Regresar</a>
        <button type="button" id="btn_actualizar_perfil">Actualizar</button>
    </main>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Perfil JS -->
    <script src="perfil.js?v=<?php echo rand(); ?>"></script>
</body>

</html>