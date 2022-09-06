<?php

    $db = new mysqli("localhost", "root", '', "astroenergy");
            
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $delete = $db->query("update productos set ProNombre='$_REQUEST[nombre]',ProPrecio='$_REQUEST[precio]',Prodetalle='$_REQUEST[detalle]',ProIdProveedor='$_REQUEST[proveedor]' where ProdID='$_REQUEST[id]'");
        if($delete){
            echo'<script type="text/javascript">alert("Usuario actualizado exitosamente.");
            window.location="productos.php";</script>';
        }else{
            echo'<script type="text/javascript">alert("Error al actualizar")
            window.location="productos.php";</script>';
        }
?>