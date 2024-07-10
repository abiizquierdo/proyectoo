console.log("Funciones: ../login.js");

$("#btn_ingresar").click(function(){
    let cond1 = $("#email").val();
    let cond2 = $("#password").val();

    $.ajax({
        type: "POST",
        url: "../controller/controlador_login.php",
        dataType: "json",
        data:{
            action: "ingresar",
            act1: cond1,
            act2: cond2
        },
        success: function(abc){
            
            if (abc.estado == 'ok') {
                window.location.href = '../index.php';
            } else {    
                alert(abc.mensaje)
            }
        },
        error: function(abc){
            console.log("ERROR");
            console.log(abc);
        }
    })
})

$("#Cerrar_Sesion").click(function() {
    $.ajax({
        url: '../controller/controlador_login.php',
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'cerrar_sesion'
        },
        success: function(respuesta) {
            console.log(respuesta);
            window.location.href = '../login.php';
        },
        error: function(respuesta) {
            console.log("ERROR");
            console.log(respuesta);
        }
    })
});