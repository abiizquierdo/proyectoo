<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
*{
    font-family: 'Lato', sans-serif;
    font-family: 'Open Sans', sans-serif;
    font-family: 'PT Sans', sans-serif;
    box-sizing: border-box;
}


body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
    background: linear-gradient(to right, #cb232c, #ce1d61);
    
}



form{
    width: 550px;
    padding: 2rem;
    background-color: white;
    border: none;
    border-radius: 8px;
    color: black;
}
h1{
    font-family: 'col-sm-6';
    justify-content: center;
    display: flex;
    width: 85%;
    padding: 5px;
    margin: 5px;
    border-radius: 5px;
}

label{
    color: black;
    font-size: 18px;
    padding: 8px;
    font-weight: 350;
}

input{
    display: block;
    border: 2px solid black;
    width: 95%;
    padding: 7px;
    margin: 8px;
    border-radius: 8px;
}

button{
    float: right;
    background: linear-gradient(to right, #cb232c, #ce1d61);
    padding: .5rem;
    color: white;
    border: none;
    width: 60%;
    border-radius: 2px;
    margin-right: 5px;
    text-decoration: none;
}

button:hover{
    background-color: white;
    color: black;
}

a{
    float: left;
    margin-left: 8px;
    padding: .5rem;
    text-decoration: none;
}
a:hover{
    color: white;
}

.error{
    background-color: rgb(175, 74, 74);
    color: black;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}
        </style>
</head>
<body>
    <h1> Iniciar sesión </h1>
    
    <form action="">
        <label for="">Email:</label>
        <input type="text" id="email"> <br><br>

        <label for="">Password:</label>
        <input type="password" id="password"><br><br>

        <button type="button" id="btn_ingresar">Ingresar</button>
    </form>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Mi JS -->
    <script src="../login.js?v=<?php echo rand(); ?>"></script>
</body>
</html>