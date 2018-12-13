$("#butsign").click(function(){
    $.ajax({
		url:"signincatedratico/ajax/logincatedratico.php",
		data:"NoEmpleado="+$("#NoEmpleado").val() + "&contraseña="+$("#contraseña").val(),
		dataType:"json",
		method:"POST",
		success:function(respuesta){
			console.log(respuesta);
			if(respuesta.estatus == 1){
				if(respuesta.acceso=="Catedratico");
                    window.location.href ="facultades.html";
                    
                    $("#contenido-usuarios").append(
                        `
                            <b>${respuesta.nombre}</b>
                            <b>${respuesta.apellido}</b>
                            <b>${respuesta.NoEmpleado}</b>
                            <b>${respuesta.acceso}</b>
                        `
                    );
                   
                    console.log("El servidor DICE: "+respuesta.nombre);

            }else{
                if(respuesta.estatus == 0){
                $('#NoEmpleado').css('border-bottom-color', '#F14B4B')
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