$.ajax({
    url:"ajax/estudiantesmatriculados.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#div-table-lista-estudiantet").append(
                 ` <div class="div-table-row div-table-row-list">
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].NoCuenta}</div>
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].carrera}</div>
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].nombre}</div>
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].CentroEstudio}</div>
                <div class="form-group mx-sm-3">
    <label style="width: 30%; for="inputPassword2" class="sr-only">Password</label>
    <input  style="width: 60%; type="text" class="form-control" id="NotaFinal" placeholder="Nota final">
  </div>
</form>`
            );
            $("#div-table-lista-estudiante").append(
                 ` <div class="div-table-row div-table-row-list">
                 <div class="div-table-cell" style="width: 5%;">${respuesta[i].NoCuenta}</div>
                 <div class="div-table-cell" style="width: 12%;">${respuesta[i].carrera}</div>
                 <div class="div-table-cell" style="width: 10%;">${respuesta[i].nombre}</div>
                 <div class="div-table-cell" style="width: 10%;">${respuesta[i].centro}</div>`
            );
        }

    },
    error:function(error){
        console.error(error);
        $("#tweets").append(error.responseText); 
    }
});

