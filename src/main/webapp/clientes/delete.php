<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("delete from clientespass where PasNit = '$_REQUEST[cedula]'");
    if($delete){
        $delete = $db->query("delete from clientes where CliNit = '$_REQUEST[cedula]'");
        if($delete){
            echo'<script type="text/javascript">alert("Usuario eliminado exitosamente.");
            window.location="listclientes.php";</script>';
        }else{
            echo'<script type="text/javascript">alert("Error al eliminar")
            window.location="listclientes.php";</script>';
        } 
    }else{
        echo'<script type="text/javascript">alert("Error al eliminar")
        window.location="listclientes.php";</script>';
    }    
?>