$("#butsign").click(function(){
    $.ajax({
		url:"signinestudiante/ajax/loginestudiante.php",
		data:"NoCuenta="+$("#NoCuenta").val() + "&password="+$("#password").val(),
		dataType:"json",
		method:"POST",
		success:function(respuesta){
			console.log(respuesta);
			if(respuesta.estatus == 1){
				if(respuesta.acceso=="Estudiante");
                    window.location.href ="matricula.php";
                    console.log("El servidor DICE: "+respuesta.nombre);
                    $("#imagen-usuario").attr("src",respuesta.urlImagen);
                  

                    
            }else{
                if(respuesta.estatus == 0){
                $('#NoCuenta').css('border-bottom-color', '#F14B4B')
				var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
										'<h2 style="text-align:center;">Credenciales De Ingreso al Sistema Erroneas</h2>'+
										'<p><b>Numero de Usuario Incorrecto o</b></p>'+
										'<p><b>Contraseña Incorrecta</b></p>'+
										'<h3>Universidad Nacional Autonoma de Honduras</h3>'+
                                        '<span id="btnClose">Finalizar</span>'+
                                    '</div>'+
                                '</div>'
                $('body').append(mensajeModal);
                }
            }
                // CERRANDO MODAL ==============================
                $('#btnClose').click(function(){
                    $('.modal_wrap').remove();
                });

         


            },
            error:function(error){
                console.error(error);
                $("#notificacion").append(error.responseText);
            }

    });
   

    
});