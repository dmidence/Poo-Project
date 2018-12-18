<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Seccion</title>
    <link href="css/formulario.css" rel="stylesheet"> 
</head>
<body >

<div id="principal">

<form>

<div class="form-group"> <!-- Full Name -->
<label for="state_id" class="control-label">Carrera</label>
    <select class="form-control" id="slc-carrera">
        <option value="ingenieria-en-sistema">Ingenieria En Sistema</option>
        
    </select>                   
</div>    

<div class="form-group"> <!-- Street 1 -->
<label for="state_id" class="control-label">Departamento</label>
    <select class="form-control" id="state_id">
        <option value="depto-matematicas">Departamento de matematicas</option>
        <option value="depto-generales">Departamento Generales</option>
        <option value="depto-ingenieria">Departamento De Ingenieria en Sistema</option>
        <option value="depto-fisicas">Departamentos de Fisicas</option>
        <option value="depto-optativas">Departamento Optativas</option>
        <option value="depto-arteodeporte">Departamento arte o deporte</option>
        
    </select>                   
</div>                    
                        
<div class="form-group"> <!-- Street 2 -->
<label for="state_id" class="control-label">State</label>
    <select class="form-control" id="state_id">
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        
    </select>                   
</div>    

<div class="form-group"> <!-- City-->
    <label for="city_id" class="control-label">City</label>
    <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
</div> 
<div class="form-group"> <!-- City-->
    <label for="city_id" class="control-label">City</label>
    <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
</div>                                    
<div class="form-group"> <!-- City-->
    <label for="city_id" class="control-label">City</label>
    <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
</div>                                    
            
<div class="form-group"> <!-- State Button -->
    <label for="state_id" class="control-label">State</label>
    <select class="form-control" id="state_id">
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        
    </select>       
    <div class="form-group"> <!-- State Button -->
    <label for="state_id" class="control-label">State</label>
    <select class="form-control" id="state_id">
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        
    </select>              
</div>

<div class="form-group"> <!-- Zip Code-->
    <label for="zip_id" class="control-label">Zip Code</label>
    <input type="text" class="form-control" id="zip_id" name="zip" placeholder="#####">
</div>        

<div class="form-group"> <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Buy!</button>
</div>     

</form>
</div>
  <script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

</body>
</html>