function AlmacenaryCargar(codigo, nombre, tipo, precio_prod, precio_dist) {
    var parametros = {
        "vCodigo": codigo,
        "vNombre": nombre,
        "vTipo": tipo,
        "vPrecio_prod": precio_prod,
        "vPrecio_dist": precio_dist
    };
    $.ajax({
        data: parametros,
        url: 'procesos_php/almacenarycargar.php',
        type: 'post',
        success: function(response) {
            $("#detalle").html(response);
            document.getElementById("FormIngreso").reset();

        }

    });
}

function Eliminar(codigo) {
    console.log(codigo);
    var parametrose = {
        "vCodeEliminar": codigo

    };
    $.ajax({
        data: parametrose,
        url: 'procesos_php/eliminar.php',
        type: 'post',
        success: function(response) {
            $("#detalle").html(response);


        }

    });
}
