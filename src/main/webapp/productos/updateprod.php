<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Permite instalar Bootstrap CSS desde un servidor-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--Instala styles.css, archivo con estilos adicionales que se debe crear en la carpeta css dentro de la raiz del proyecto, debe importarse luego del de Bootstrap-->
    <link rel="stylesheet" href="../css/styles_login.css">

    <!--Instala behavior.js, archivo con comportamientos javascript que se debe crear en la carpeta js dentro de la raiz del proyecto-->
    <script src="../js/behavior.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Actualizar Productos</title>
</head>

<body>
    <!-- Inicia barra navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
                        <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../clientes/clientes.php">Listar y Actualizar</a></li>
                            <li><a class="dropdown-item" href="../clientes/listclientes.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empleados</a>
                        <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../empleados/registro.php">Registrar</a></li>
                            <li><a class="dropdown-item" href="../empleados/empleados.php">Listar y Actualizar</a></li>
                            <li><a class="dropdown-item" href="../empleados/listempleados.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Proveedores</a>
                        <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../proveedores/proveedores.php">Listar y Actualizar</a></li>
                            <li><a class="dropdown-item" href="../proveedores/registro.php">Registrar</a></li>
                            <li><a class="dropdown-item" href="../proveedores/listprov.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../productos/regproductos.php">Registrar</a></li>
                            <li><a class="dropdown-item" href="../productos/productos.php">Listar y Actualizar</a></li>
                            <li><a class="dropdown-item" href="../productos/listprod.php">Eliminar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Termina barra navegación -->
    <div class="container" id="contenedor">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="width: 40rem">
                <div class="card-header">
                    <br>
                    <h5 class="bg-danger" align=center>CUALQUIER MODIFICACIÓN NO SE PODRÁ RECUPERAR</h5>
                    <div class="d-flex justify-content-end logo_icon">
                        <span><img src="../img/logo.png" alt=""></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action=update.php method="post">
                        <?php
                        $conexion = mysqli_connect("localhost", "root", "", "astroenergy") or
                            die("Problemas con la conexión");

                        $registros = mysqli_query($conexion, "select * from productos where ProdID='$_REQUEST[nombre]'") or
                            die("Problemas en el select:" . mysqli_error($conexion));
                        /*si no hay registros, mysqli_num_rows($registros) = 0*/
                        if (mysqli_num_rows($registros) == 0) {
                            echo '<script type="text/javascript">alert("Usuario no existe")
			window.location="productos.php";</script>';
                        }

                        while ($reg = mysqli_fetch_array($registros)) {
                            echo "<div class='bg-white'>";
                            echo "<div class='bg-white'><input  style='text-align:center' class='input-sm bg-white w-75' type='hidden' name='id' value='$reg[ProdID]'>" . "</div>";
                            echo "<div class='bg-light'><label for='nombre' class='bg-light w-25'  style='text-align:center'>Nombre:\t</label><input class='input-sm bg-light w-75'  style='text-align:center' type='text' name='nombre' value='$reg[ProNombre]'>" . "</div>";
                            echo "<div class='bg-white'><label for='precio' class='bg-white w-25'  style='text-align:center'>Precio:</label><input class='input-sm bg-white w-75'  style='text-align:center' type='text' name='precio' value='$reg[ProPrecio]'>" . "</div>";
                            echo "<div class='bg-light'><label for='detalle' class='bg-light w-25'  style='text-align:center'>Detalle:</label><input class='input-sm bg-light w-75'  style='text-align:center' type='text' name='detalle' value='$reg[Prodetalle]'>" . "</div>";
                            echo "<div class='bg-white'><label for='proveedor' class='bg-white w-25'  style='text-align:center'>Proveedor:</label>";
                            echo "<input class='input-sm bg-white w-75'  style='text-align:center' type='text' name='proveedor' value='$reg[ProIdProveedor]'>" . "</div></div>";
                        }
                        mysqli_close($conexion);
                        ?>
                        <br>
                        <div class="form-group row justify-content-center">
                            <input type="button" value="Cancelar" class="btn btn-success w-25 me-2" onclick="location='productos.php'">
                            <input type="submit" value="Modificar" class="btn btn-info w-25 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Javascript adicionales-->

    <!--Permite instalar popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--Permite instalar Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>