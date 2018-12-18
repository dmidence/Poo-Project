

$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"signinestudiante/ajax/llenarfacu.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#slc-departamentos").html(`<option value="seleccionar">Seleccione el departamento/option>`+ $("#slc-departamentos").html());
			for (var i =0;i<respuesta.length;i++){
                $("#slc-departamentos").html(`
                <option value="${respuesta[i].carpeta}">${respuesta[i].departamento}</option>`+$("#slc-departamentos").html()
				);
			}
		},
		error:function(error){
			console.error(error);
		}
	});



});



$("#slc-asignaturas").change(function(){
	
	var facult = $("slc-departamentos").val();
	
				switch(facult[1]){
				case "ec":
					cssIcono = "far fa-file-word";
					break;
				case "es":
					cssIcono = "far fa-file-pdf";
					break;
				case "nat":
					cssIcono = "far fa-file-image";
					break;
				case "jpg":
					cssIcono = "far fa-file-image";
					break;
				default:
					cssIcono = "far fa-file";
					break;
				} 
		
	$.ajax({
		url:"ajax/clases.php",
		method:"GET",
        data:"facultad="+facultad,
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
});



