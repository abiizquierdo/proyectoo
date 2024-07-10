<?php
    include_once 'config.php';
    include_once 'session.php';


    //Lista de usuarios
    $sql_usuarios = "SELECT * FROM usuarios";
    $result_sql_usuarios = mysqli_query($conexion, $sql_usuarios);
    $usuarios = $result_sql_usuarios->fetch_all(MYSQLI_ASSOC);
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

    <h1>Gestion de Usuarios</h1>
    <a href="crear_usuario.php">Crear Usuario</a>
    <table border="1">
        <thead>
            <tr>
                <th>Perfil</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>DNI</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $usuario_dato){ ?>
                <tr>
                    <td> <?php echo $usuario_dato['id_perfil'] ?> </td>
                    <td> <?php echo $usuario_dato['nombre'] ?> </td>
                    <td> <?php echo $usuario_dato['apellido'] ?> </td>
                    <td> <?php echo $usuario_dato['email'] ?> </td>
                    <td> <?php echo $usuario_dato['DNI'] ?> </td>
                    <td>
                        <a href="ver_usuario.php?id=<?php echo $usuario_dato['id_usuario']?>">Ver</a>
                        <a href="editar_usuario.php?id=<?php echo $usuario_dato['id_usuario']?>">Editar</a>
                        <a href="#" onclick="eliminar_usuario('<?php echo $usuario_dato['id_usuario']?>')">Eliminar</a>
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
    <script src="usuarios.js?v=<?php echo rand(); ?>"></script>
</body>

</html>