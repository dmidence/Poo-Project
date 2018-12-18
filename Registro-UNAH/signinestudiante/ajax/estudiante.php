<?php
    session_start(); //Tiene que ser la primera funcion.
    if(isset($_POST["cuenta"])){
        $archivo = fopen("../data/alumnos/alumnos.json","r");
        while(($linea=fgets($archivo))){
            $registroUsuario = json_decode($linea,true);
            if (
                $_POST["cuenta"]==$registroUsuario["cuenta"] && 
                $_POST["password"]==$registroUsuario["pass"]
            ){
                $registroUsuario["estatus"] = "1"; //Acceso exitoso
                $registroUsuario["mensaje"] = "Acceso autorizado";
                $_SESSION["cuenta"] = $registroUsuario["cuenta"];
                $_SESSION["nombre"] = $registroUsuario["nombre"];
                $_SESSION["apellido"] = $registroUsuario["apellido"];
                $_SESSION["id"] = $registroUsuario["ID"];
                $_SESSION["mail"] = $registroUsuario["correo"];
                $_SESSION["facultad"] = $registroUsuario["facultad"];
                $_SESSION["carrera"] = $registroUsuario["carrera"];
                $_SESSION["centro"] = $registroUsuario["centro"];
            
               echo json_encode($registroUsuario);
                exit();
            }
        }
        //No encontro el registro
        $registroUsuario = array();
        $registroUsuario["estatus"] = "0"; //Acceso no autorizado
        $registroUsuario["mensaje"] = "Acceso no autorizado";
        echo json_encode($registroUsuario);
    }
?>

