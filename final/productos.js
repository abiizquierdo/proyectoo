
console.log("Funciones: productos.js");
//Crear usuario
$('#btn_crear_producto').click(function () {
    $.ajax({
        type: "POST",
        url: "controller/controlador_producto.php",
        dataType: "json",
        data: {
            action: "crearProducto",
            id_usuario: $("#id_usuario").val(),
            id_categoria: $("#id_categoria").val(),
            id_proveedor: $("#id_proveedor").val(),
            codigo: $("#input_codigo").val(),
            nombre: $("#input_nombre").val(),
            descripcion: $("#textarea_descripcion").val(),
            moneda: $("#input_moneda").val(),
            precio_compra: $("#input_precioCompra").val(),
            precio_venta: $("#input_precioVenta").val()
        },
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estado == 'ok') {
                window.location.href = 'productos.php';
            } else {
                alert(respuesta.mensaje);
            }
        },
        error: function (respuesta) {
            console.log(respuesta);
        }
    })
});
$(document).ready(function() {
    // Editar producto
    $('#btn_actualizar_producto').click(function () {
        $.ajax({
            type: "POST",
            url: "controller/controlador_producto.php",
            dataType: "json",
            data: {
                action: "editarProducto",
                id_producto: $("#input_idProducto").val(),
                id_categoria: $("#input_idCategoria").val(),
                id_proveedor: $("#input_idProveedor").val(),
                codigo: $("#input_codigo").val(),
                nombre: $("#input_nombre").val(),
                descripcion: $("#input_descripcion").val(),
                moneda: $("#input_moneda").val(),
                precio_compra: $("#input_preciocompra").val(),
                precio_venta: $("#input_precioventa").val()
            },
            success: function (respuesta) {
                console.log(respuesta);
                if (respuesta.estado === 'ok') {
                    window.location.href = 'productos.php';
                } else {
                    alert(respuesta.mensaje);
                }
            },
            error: function (respuesta) {
                console.log(respuesta);
            }
        });
    });

    // Eliminar producto
    window.eliminar_producto = function(id) {
        $.ajax({
            type: "POST",
            url: "controller/controlador_producto.php",
            dataType: "json",
            data: {
                action: "eliminarProducto",
                id_producto: id
            },
            success: function (respuesta) {
                console.log(respuesta);
                if (respuesta.estado === 'ok') {
                    window.location.href = 'productos.php';
                } else {
                    alert(respuesta.mensaje);
                }
            },
            error: function (respuesta) {
                console.log(respuesta);
            }
        });
    }
});

