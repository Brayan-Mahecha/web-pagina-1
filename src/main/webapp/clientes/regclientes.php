<?php
        $db = new mysqli("localhost", "root", '', "astroenergy");
        
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $insert = $db->query("insert into clientes(CliNit,CliRazonSocial,CliDireccion,CliTelefono,CliCiudad,CliPais,CliUsuario) values ('$_REQUEST[id]','$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[ciudad]','$_REQUEST[pais]','$_REQUEST[usuario]')");
        
        $insert = $db->query("insert into clientespass(PasNit,PasCliContraseña) values ('$_REQUEST[id]','$_REQUEST[passwd]')");
        if($insert){
            echo'<script type="text/javascript">alert("Usuario creado exitosamente.");
			window.location="../index.php";</script>';
        }else{
			echo'<script type="text/javascript">alert("Verifique los datos")
			window.location="registro.php";</script>';
        } 
?>