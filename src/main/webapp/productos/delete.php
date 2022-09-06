<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("delete from productos where ProdID = '$_REQUEST[nombre]'");
    if($delete){
        echo'<script type="text/javascript">alert("Producto eliminado exitosamente.");
            window.location="listprod.php";</script>';
        }else{
            echo'<script type="text/javascript">alert("Error al eliminar")
            window.location="listprod.php";</script>';
        }
?>