<?php

if (!empty($_POST['btnregistrar'])) {
    if(!empty($_POST["Nombre"]) and !empty($_POST["Ap_paterno"]) and !empty($_POST["Ap_materno"]) and !empty($_POST["Correo"])) {
       
        
        $Nombre=$_POST["Nombre"];
        $Ap_paterno=$_POST["Ap_paterno"];
        $Ap_materno=$_POST["Ap_materno"];
        $Correo=$_POST["Correo"];

        $sql=$conexion->query(" insert into usuarios(Nombre,Ap_paterno,Ap_materno,Correo)values('$Nombre','$Ap_paterno','$Ap_materno','$Correo')");
        if($sql==1){
            echo'<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }

    }else{
        echo'<div class="alert alert-wargning"><b>Alguno de los campos esta vacio</b></div>';
    }
}
?>