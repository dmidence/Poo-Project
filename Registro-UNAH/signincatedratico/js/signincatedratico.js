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
                    window.location.href ="signincatedratico/catedratico.php";
                    
            
                   
                    console.log("El servidor DICE: "+respuesta.nombre);

            }else{
                if(respuesta.estatus == 0){
                alert("usuario no valido")
                }
            }
                


            },
            error:function(error){
                console.error(error);

            }

	});
});