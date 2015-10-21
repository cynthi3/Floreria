$(document).ready(function(){
	console.log("Iniciando sitio");

	$("#form").validate({
		rules: {
			nombre: {
				required: true,
				alphas: true
			},
			edad: {
				required: true,
				numbers: true
			}
		},
		//messages: {
		//	nombre: "Ingrese su nombre",
		//	edad: "Ingrese su edad"
		//},
		submitHandler: function(form){
			form.submit();
		},
		highlight: function(element){
			$(element).parent().removeClass('has-success').addClass('has-error');
		},
		success: function(element){
			$(element).parent().removeClass('has-error').addClass('has-success');
		}
	});

	jQuery.validator.addMethod("alphas", function(value, element){
	return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
	}, 'Sólo caracteres');

	jQuery.validator.addMethod("numbers", function(value, element){
	return this.optional(element) || /^[0-9]+$/.test(value);
	}, 'Sólo numeros');


	$("#guardar").prop('disabled', 'disabled');

	$("#form").on('keyup blur', function(){ //Hace el evento cada vez que presionemos una tecla o posicion
		if ($("#form").valid()){
			//Habilitamos
			$("#guardar").prop('disabled', false);
		}else{
			//Deshabilitamos
			$("#guardar").prop('disabled', 'disabled');
		}
	});

});