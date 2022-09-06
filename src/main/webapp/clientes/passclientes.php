<?php
    $conexion = mysqli_connect("localhost", "root", "", "astroenergy") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select PasNit,PasCliContraseña from clientespass where PasNit='$_REQUEST[cedula]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        if ($reg['PasCliContraseña'] == $_REQUEST['passwd']){
            echo '<script type="text/javascript">alert("Bienvenido.");
			window.location="../tienda.php";</script>';
        }else{
            echo '<script type="text/javascript">alert("Contraseña incorrecta.");
			window.location="../index.php";</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("Documento no registrado.");
			window.location="../index.php";</script>';
    }
    mysqli_close($conexion);
?>