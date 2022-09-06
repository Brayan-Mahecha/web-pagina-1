<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("delete from pass where PasCedula='$_REQUEST[cedula]'");
    if($delete){
        echo "bien";
        $delete = $db->query("delete from empleados where EmpCedula = '$_REQUEST[cedula]'");
        if($delete){
            echo'<script type="text/javascript">alert("Usuario eliminado exitosamente.");
            window.location="listempleados.php";</script>';
        }else{
            echo'<script type="text/javascript">alert("Error al eliminar")
            window.location="listempleados.php";</script>';
        } 
    }else{
        echo'<script type="text/javascript">alert("Error al eliminar")
        window.location="listempleados.php";</script>';
    }    
?>