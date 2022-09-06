<?php
        $db = new mysqli("localhost", "root", '', "astroenergy");
        
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $insert = $db->query("insert into empleados(EmpCedula,EmpNombre,EmpDireccion,EmpTelefono,EmpCiudad,EmpCargo,EmpContrato,EmpSueldo,EmpEPS,EmpARL,EmpCCF) values ('$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[ciudad]','$_REQUEST[cargo]','$_REQUEST[contrato]','$_REQUEST[sueldo]','$_REQUEST[eps]','$_REQUEST[arl]','$_REQUEST[ccf]')");
        
        $insert = $db->query("insert into pass(PasCedula,PasContraseña) values ('$_REQUEST[cedula]','$_REQUEST[passwd]')");
        if($insert){
            echo'<script type="text/javascript">alert("Empleado agregado exitosamente.");
			window.location="registro.php";</script>';
        }else{
			echo'<script type="text/javascript">alert("Verifique los datos")
			window.location="registro.php";</script>';
        } 
?>