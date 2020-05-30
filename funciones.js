function mostrar() {
    $.ajax({
        type: 'POST',
        url: 'controladores/mostrarDatos.php',
        success: function (r) {
            $('#tabla').html(r);
        }
    });
}

function obtenerDatos(id) {
    $.ajax({
        type: 'POST',
        data: "id=" + id,
        url: 'controladores/obtenerDatos.php',
        cache: false,
        success: function (r) {
            r = jQuery.parseJSON(r);
            $('#id').val(r['id']);
            $('#usuariou').val(r['usuario']);
            $('#passu').val(r['password']);
        }
    });
}

function actualizarDatos() {
    if (validarEditar() == true) {
        var cadena = $('#formEditar').serialize();
        $.ajax({
            type: 'POST',
            url: 'controladores/actualizarDatos.php',
            data: cadena,
            cache: false,
            success: function (r) {
                alertify.set('notifier', 'position', 'top-center');
                alertify.success('Datos modificado');
                mostrar();
                $('#exampleModal1').modal('hide');
            }
        });
    }
}

function eliminarDatos(id) {
    alertify.confirm('Eliminar Dato', '¿Desea eliminar el registro seleccionado?', function () {
        $.ajax({
            type: 'POST',
            url: 'controladores/eliminarDatos.php',
            data: "id=" + id,
            cache: false,
            success: function (r) {
                alertify.set('notifier', 'position', 'top-center');
                alertify.success('Dato eliminado');
                mostrar();
            }
        });
    }, function () {
        alertify.set('notifier', 'position', 'top-center');
        alertify.warning('Cancelo la elimnación');
    });
}


function insertarDatos() {
    if (validarAgregar() == true) {
        var cadena = $('#formAgregar').serialize();
        $.ajax({
            type: 'POST',
            url: 'controladores/guardarDatos.php',
            data: cadena,
            cache: false,
            success: function (r) {
               if (r==2) {
                alertify.set('notifier', 'position', 'top-center');
                alertify.warning('Ya existe es usuario en la base');
                $('#usuario').focus();//puntero en el input seleccionado
               } else {
                alertify.set('notifier', 'position', 'top-center');
                alertify.success('Dato guardado');
                $('#formAgregar')[0].reset();//limpias las cajas de texto del modal
                mostrar();
               }
                
            }
        });
    }
}

function validarAgregar() {
    var usu = $('#usuario').val();
    var pass = $('#pass').val();
    if (($.trim(usu) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Ingrese su usuario');
        $("#usuario").focus();
        return false;
    } else if (($.trim(pass) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Ingrese su contraseña');
        $("#pass").focus();
        return false;
    } else {
        return true;
    }
}

function validarEditar() {
    var usu = $('#usuariou').val();
    var pass = $('#passu').val();
    if (($.trim(usu) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Ingrese su usuario');
        $("#usuariou").focus();
        return false;
    } else if (($.trim(pass) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Ingrese su contraseña');
        $("#passu").focus();
        return false;
    } else {
        return true;
    }
}


