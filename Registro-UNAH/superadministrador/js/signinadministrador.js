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
                if(respuesta.estatus == 0)
                $(`body`).html("<div class='alert alert-danger' role='alert'><b>acceso denegado, </b>no se pudo comprobar el usuario</div>");
            }
                }

        });
    });