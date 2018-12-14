$("#butsign").click(function(){
    $.ajax({
		url:"ajax/loginadministrador.php",
		data:"NoCuenta="+$("#NoCuenta").val() + "&password="+$("#password").val(),
		dataType:"json",
		method:"POST",
		success:function(respuesta){
			console.log(respuesta);
			if(respuesta.estatus == 1){
				if(respuesta.acceso=="Administrador");
                    window.location.href ="super-administrador.php";
                    
                    $("#contenido-usuarios").append(
                        `
                            <b>${respuesta.nombre}</b>
                            <b>${respuesta.apellido}</b>
                            <b>${respuesta.NoCuenta}</b>
                            <b>${respuesta.acceso}</b>
                        `
                    );
                   
                    console.log("El servidor DICE: "+respuesta.nombre);

            }else{
                if(respuesta.estatus == 0){
                $('#NoCuenta').css('border-bottom-color', '#F14B4B')
				var mensajeModal = '<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'+
                                    '<div class="modal-dialog" role="document">'+
										'<div class="modal-content">'+
										'<div class="modal-header">'+
										'<button type="button" class="close" aria-label="Close">'+
										'<span aria-hidden="true">&times;</span>'+
                                        '</button>'+
                                    '<h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>'+
                                '</div>'+
                                '<div class="modal-body">'+
                                'Texto del modal'+
                                '</div>'+
                                '</div>'+
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