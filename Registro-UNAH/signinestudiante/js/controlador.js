

$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"signinestudiante/ajax/llenarfacu.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#facu").append(`<option value="sel" >Seleccione la Facultad</option>`);
			for (var i =0;i<respuesta.length;i++){
                $("#facu").append(`
                <option value="${respuesta[i].op}">${respuesta[i].facultad}</option>`
				);
			}
		},
		error:function(error){
			console.error(error);
		}
	});

	



});
function cambioOpciones()

	{

		document.getElementById('clases').value=document.getElementById('facu').value;

	}


$("#facu").change(function(){
	var facultad = $("#facu").val();
	
		
	$.ajax({
		url:"signinestudiante/ajax/clases.php?accion=1",			
		method:"GET",
        data: "op="+facultad,
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
        
			for (var i =0;i<respuesta.length;i++){
                $("#clases").append(`
                <option value="${respuesta[i].codigo}">${respuesta[i].clase}</option>`
				);
			}
		},
	
	error:function(error){
		console.error(error);
		$("#jefe").append(error.responseText);
	}
	
});


//====================================================obtener secciones=================================================================
$("#select-clases").change(function(){
	var carrera = $("#select-carreras").val();
    var facultad = $("#slc-facultades").val();
    var clase = $("#select-clases").val();

	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.	
	$.ajax({
		url:"ajax/secciones.php?accion=1",			//la accion 1 es para obtener las seccioness
		method:"GET",
        data: "codCarrera="+carrera+"&"
              +"facultad="+facultad+"&"
              +"codClase="+clase,
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);

			for (var i =0;i<respuesta.length;i++){
                $("#select-secciones").append(`
                <option value="${respuesta[i].seccion}"><b>Seccion:</b> ${respuesta[i].seccion} <b>cupos:</b> ${respuesta[i].cupos}   <b>dias:</b> ${respuesta[i].dias}   <b>Docente:</b> ${respuesta[i].docente}</option>`
				);
			}
		},
		error:function(error){
			console.error(error);
			$("#jefe").append(error.responseText);
		}
	});
});

////////////////////////////////////////////MATRICULAR ASIGNATURA//////////////////////////////////////////////////////

$("#btn-matricular").click(function(){
	var parametros = "seccion="+$("#select-secciones").val()+"&"+
					"codCarrera="+$("#select-carreras").val()+"&"+
					"cuenta="+$("#usuario-matriculando").val()+"&"+
					"codClase="+$("#select-clases").val()+"&"+
					"facultad="+$("#slc-facultades").val();
			
			console.log(parametros);		
			$("#btn-matricular").attr("disabled",true);
			
			$.ajax({
				url:"ajax/matricula.php?accion=1",  //accion 1 para matricular clases
				data:parametros,
				method:"POST",
				dataType:"json",
				success:function(respuesta){
					console.log(respuesta);
				//	$('#modal-matricular').modal('hide');		
						$("#clases-matriculadas").append(
							`<tr>
								<td>${respuesta.codCarrera}${respuesta.codClase}</td>
								<td>${respuesta.seccion}</td>
								<td>${respuesta.clase}</td>
								<td>${respuesta.inicio}</td>
								<td>${respuesta.final}</td>
								<td>${respuesta.dias}</td>
								<td>${respuesta.uv}</td>
								<td>3</td>
							</tr>`
						);
					}	
				
			});
});})
