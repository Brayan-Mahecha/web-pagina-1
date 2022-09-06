<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("update empleados set EmpCedula='$_REQUEST[cedula]',EmpNombre='$_REQUEST[nombre]',EmpDireccion='$_REQUEST[direccion]',EmpTelefono='$_REQUEST[telefono]',EmpCiudad='$_REQUEST[ciudad]',EmpCargo='$_REQUEST[cargo]',EmpSueldo='$_REQUEST[sueldo]',EmpEPS='$_REQUEST[eps]',EmpARL='$_REQUEST[arl]',EmpCCF='$_REQUEST[ccf]' where EmpCedula='$_REQUEST[cedula]'");
        if($delete){
            echo'<script type="text/javascript">alert("Usuario actualizado exitosamente.");
            window.location="empleados.php";</script>';
        }else{
            echo'<script type="text/javascript">alert("Error al actualizar")
            window.location="empleados.php";</script>';
        }
?>