<?php
session_start();
    $archivo = fopen("../data/administrador.json","r");
    while(($linea=fgets($archivo))){
        $registro= json_decode($linea,true);
        if(
            $_POST["NoCuenta"]==$registro["NoCuenta"]&&
            $_POST["password"]==$registro["password"] && $registro["acceso"]=="Administrador"
        ){
            $registro["estatus"]="1";
            $registro["mensaje"]="Acceso autorizado";
            $_SESSION["NoCuenta"]=$_POST["NoCuenta"];
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

