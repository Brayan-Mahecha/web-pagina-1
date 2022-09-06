<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("delete from proveedores where ProNit = '$_REQUEST[cedula]'");
    if($delete){
        echo'<script type="text/javascript">alert("Usuario eliminado exitosamente.");
            window.location="listprov.php";</script>';
    }else{
        echo'<script type="text/javascript">alert("Error al eliminar")
        window.location="listprov.php";</script>';
    }
    ?>