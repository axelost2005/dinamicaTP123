$(document).ready(function(){
    $("#formulario2").validate({
        rules : {
            lunes : {
            required : true,
            digits : true
            },
            martes : {
                required : true,
                digits : true
            },
            miercoles : {
                required : true,
                digits : true
            },
            jueves : {
                required : true,
                digits: true
            },
            viernes : {
                required : true,
                digits : true
            }
        },
        messages : {
            lunes: {
                required : "Este campo es obligatorio",
                digits : "Solo se aceptan numeros"
            },
            martes : {
                required : "Este campo es obligatorio",
                digits : "Solo se aceptan numeros"
            },
            miercoles : {
                required : "Este campo es obligatorio",
                digits : "Solo se aceptan numeros"
            },
            jueves : {
                required : "Este campo es obligatorio",
                digits : "Solo se aceptan numeros"
            },
            viernes : {
                required : "Este campo es obligatorio",
                digits : "Solo se aceptan numeros"
            }
        },
        submitHandler : function(form){
            form.submit();
        }
    });
});