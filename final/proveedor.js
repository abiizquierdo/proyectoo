console.log("Funciones: proveedor.js");
//Crear proveedor
$('#btn_crear_proveedor').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_proveedor.php",
        dataType: "json",
        data: {
            action: "crearproveedor",
            ruc: $("#ruc").val(),
            razon_social: $("#razon_social").val(),
            representante_legal: $("#representante_legal").val(),
            email: $("#email").val(),
            telefono: $("#telefono").val(),
            celular: $("#celular").val(),
            direccion: $("#direccion").val(),
            cuenta_bancaria: $("#cuenta_bancaria").val(),
            cuenta_CCI: $("#cuenta_CCI").val(),
            banco: $("#banco").val(),
            
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'proveedor.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});
//Editar proveedor
$('#btn_actualizar_proveedor').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_proveedor.php",
        dataType: "json",
        data: {
            action: "editarproveedor",
            id_proveedor: $("#input_idproveedor").val(),
            ruc: $("#input_ruc").val(),
            razon_social: $("#input_razon_social").val(),
            representante_legal: $("#input_representante_legal").val(),
            email: $("#input_email").val(),
            telefono: $("#input_telefono").val(),
            celular: $("#input_celular").val(),
            direccion: $("#input_direccion").val(),
            cuenta_bancaria: $("#input_cuenta_bancaria").val(),
            cuenta_CCI: $("#input_cuenta_CCI").val(),
            banco: $("#input_banco").val(),
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'proveedor.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});
//Eliminar proveedor
function eliminar_proveedor(id) {
    $.ajax({
        type: "POST",
        url: "controller/controlador_proveedor.php",
        dataType: "json",
        data: {
            action: "eliminarproveedor",
            id_proveedor : id
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'proveedor.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
};