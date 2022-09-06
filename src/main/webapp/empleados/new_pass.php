<?php
    $conexion = mysqli_connect("localhost", "root", "", "astroenergy") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select EmpCedula from empleados where EmpCedula='$_REQUEST[newid]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        echo '<script type="text/javascript">alert("Su contraseña ha sido enviada a su correo");
			window.location="acceso_empleados.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("Cédula no registrada.");
			window.location="acceso_empleados.php";</script>';
    }
    mysqli_close($conexion);
?>