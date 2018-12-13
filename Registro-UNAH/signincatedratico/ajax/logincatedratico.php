<?php
session_start();
    $archivo = fopen("../data/catedratico.json","r");
    while(($linea=fgets($archivo))){
        $registro= json_decode($linea,true);
        if(
            $_POST["NoEmpleado"]==$registro["NoEmpleado"]&&
            $_POST["contraseña"]==$registro["contraseña"] && $registro["acceso"]=="Catedratico"
        ){
            $registro["estatus"]="1";
            $registro["mensaje"]="Acceso autorizado";
            $_SESSION["NoEmpleado"]=$_POST["NoEmpleado"];
            $_SESSION["acceso"]=$registro["acceso"];
            echo json_encode($registro);
            exit;
        }
    }
    $registro = array();
    $registro["estatus"] = "0";
    $registro["mensaje"] = "Credendiales Invalidas, Por Favor Intentelo de nuevo";
    echo json_encode($registro);
?>