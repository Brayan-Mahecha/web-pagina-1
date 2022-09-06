<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("update clientes set CliNit='$_REQUEST[cedula]',CliRazonSocial='$_REQUEST[nombre]',CliDireccion='$_REQUEST[direccion]',CliTelefono='$_REQUEST[telefono]',CliCiudad='$_REQUEST[ciudad]',CliPais='$_REQUEST[pais]' where CliNit='$_REQUEST[cedula]'");
        if($delete){
            echo'<script type="text/javascript">alert("Usuario actualizado exitosamente.");
            window.location="clientes.php";</script>';
        }else{
            echo'<script type="text/javascript">alert("Error al actualizar")
            window.location="clientes.php";</script>';
        }
?>