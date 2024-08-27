
$(document).ready(function(){
    $("#registroForm").validate({
       rules: {
        numero : {
            required : true,
            digits : true
        }
       },
       messages : {
        numero : {
        required : "Este campo es obligatorio",
        digits : "Solo se aceptan numeros"
       }
    },
    submitHandler : function(form){
        form.submit();
    }
    });


});