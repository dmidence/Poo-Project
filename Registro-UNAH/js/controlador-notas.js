$.ajax({
    url:"ajax/estudiantesmatriculados.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#div-estudiantes").append(
                 ` <div style=" display=inline-block;" class="div-table-row div-table-row-list">
                <div style=" display=inline-block;" class="div-table-cell" style="width: 15%;">Numero De Cuenta:&nbsp&nbsp${respuesta[i].NoCuenta}</div>
                <div style=" display=inline-block;" class="div-table-cell" style="width: 15%;">Carrera:&nbsp&nbsp${respuesta[i].carrera}</div>
                <div style=" display=inline-block;"class="div-table-cell" style="width: 15%;">Nombre:&nbsp&nbsp${respuesta[i].nombre}</div>
                <div style=" display=inline-block;"class="div-table-cell" style="width: 15%;">Centro:&nbsp&nbsp ${respuesta[i].centro}</div>
                <div style=" display=inline-block;"class="form-group mx-sm-3">
    <input  style="width: 60px; type="text" class="form-control" id="NotaFinal" placeholder="Nota final">
  </div> `
            );
           
        }

    },
    error:function(error){
        console.error(error);
        $("#tweets").append(error.responseText); 
    }

});
    //Funcion Para el boton 

    $("#btncalificar").click(function(){
        alert("Calificaciones Subidas Satifactoria");
       console.log(parametros)
       $.ajax({
        url:"ajax/class-alumnos.php?accion=2",
        data:parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);
            
        }
    });


});
