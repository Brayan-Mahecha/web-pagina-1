<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("update proveedores set ProNit='$_REQUEST[cedula]',ProRazonSocial='$_REQUEST[nombre]',ProDireccion='$_REQUEST[direccion]',ProTelefono='$_REQUEST[telefono]',ProCiudad='$_REQUEST[ciudad]',ProPais='$_REQUEST[pais]' where ProNit='$_REQUEST[cedula]'");
        if($delete){
            echo'<script type="text/javascript">alert("Usuario actualizado exitosamente.");
            window.location="proveedores.php";</script>';
        }else{
            echo'<script type="text/javascript">alert("Error al actualizar")
            window.location="proveedores.php";</script>';
        }
?>