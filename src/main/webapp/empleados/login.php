<?php
    $conexion = mysqli_connect("localhost", "root", "", "astroenergy") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select PasCedula,PasContraseña from pass where PasCedula='$_REQUEST[cedula]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        if ($reg['PasContraseña'] == $_REQUEST['passwd']){
            echo '<script type="text/javascript">alert("Bienvenido.");
			window.location="empleados.php";</script>';
        }else{
            echo '<script type="text/javascript">alert("Contraseña incorrecta.");
			window.location="acceso_empleados.php";</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("Cédula no registrada.");
			window.location="acceso_empleados.php";</script>';
    }
    mysqli_close($conexion);
?>