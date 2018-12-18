<?php
session_start();
    $archivo = fopen("../data/jefe.json","r");
    while(($linea=fgets($archivo))){
        $registro= json_decode($linea,true);
        if(
            $_POST["NoJefe"]==$registro["NoJefe"]&&
            $_POST["contraseña"]==$registro["contraseña"] && $registro["acceso"]=="jefe"
        ){
            $registro["estatus"]="1";
            $registro["mensaje"]="Acceso autorizado";
            $_SESSION["NoJefe"]=$_POST["NoJefe"];
            $_SESSION["acceso"]=$registro["acceso"];
            $_SESSION["urlImagen"]=$registro["urlImagen"];
            $_SESSION["nombre"]=$registro["nombre"];
            $_SESSION["acceso"]=$registro["acceso"];
            $_SESSION["carrera"] = $registro["carrera"];
            $_SESSION["centro"] = $registro["centro"];
            echo json_encode($registro);
            exit;
        }
    }
    $registro = array();
    $registro["estatus"] = "0";
    $registro["mensaje"] = "Credendiales Invalidas, Por Favor Intentelo de nuevo";
    echo json_encode($registro);
?>