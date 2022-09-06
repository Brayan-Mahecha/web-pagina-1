<?php
        $db = new mysqli("localhost", "root", '', "astroenergy");
        
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $insert = $db->query("insert into proveedores(ProNit,ProRazonSocial,ProDireccion,ProTelefono,ProCiudad,ProPais) values ('$_REQUEST[id]','$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[ciudad]','$_REQUEST[pais]')");

        if($insert){
            echo'<script type="text/javascript">alert("Proveedor agregado exitosamente.");
			window.location="registro.php";</script>';
        }else{
			echo'<script type="text/javascript">alert("Verifique los datos")
			window.location="registro.php";</script>';
        } 
?>