<?php
    include_once 'config.php';
    include_once 'session.php';

    //Recuperamos el id por metodo GET
    $id_categoria = $_GET['id'];
    //Consulta a la base de datos
    $sql = "SELECT * FROM categorias WHERE id_categoria ='$id_categoria'"; 
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
        <h1>Ver datos de la Categoria</h1>
        <label for="">Id:</label>
        <input type="text" value="<?php echo $result['id_categoria'] ?>" disabled><br><br>

        <label for="">Nombre de la Categria:</label>
        <input type="text" value="<?php echo $result['nombre_categoria'] ?>" disabled><br><br>

        <a href="categorias.php">Regresar</a>
    </main>

</body>

</html>