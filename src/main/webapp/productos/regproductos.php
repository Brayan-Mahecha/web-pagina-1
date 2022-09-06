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

    <title>Registro Productos</title>
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
            <div class="card" style="width: 45rem; height: 40rem">
                <div class="card-header">
                    <br>
                    <h3 align=center>REGISTRO PRODUCTOS</h3>
                    <div class="d-flex justify-content-end logo_icon">
                        <span><img src="../img/logo.png" alt=""></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="registroproducto.php" method="post" enctype="multipart/form-data">
                        <table class="table table-borderless">
                            <tr>
                                <th><label for="nombre" class="text-white">Nombre*</label></th>
                                <td><input type="text" name="nombre" value="" placeholder="Nombre" style="width: 100%;" required></td>
                            </tr>
                            <tr>
                                <th><label for="precio" class="text-white" class="me-2">Precio*</label></th>
                                <td><input type="numeric" name="precio" value="" placeholder="Precio" style="width: 100%;" required></td>
                            </tr>
                            <tr>
                                <th class="align-middle"><label for="detalle" class="text-white">Detalle*</label></th>
                                <td><textarea name="detalle" rows="10" placeholder="Detalle" style="width: 100%;" required></textarea></td>
                            </tr>
                            <tr>
                                <th><label for="idproveedor" class="text-white">Id proveedor*</label></th>
                                <td><select name="idproveedor" placeholder="Proveedor" style="width: 100%;" required>
                                        <?php
                                        $conexion = mysqli_connect("localhost", "root", "", "astroenergy") or
                                            die("Problemas con la conexión");

                                        $registros = mysqli_query($conexion, "select ProNit,ProRazonSocial from proveedores") or
                                            die("Problemas en el select:" . mysqli_error($conexion));
                                        while ($reg = mysqli_fetch_array($registros)) {
                                            echo "<option value=\"$reg[ProNit]\">$reg[ProRazonSocial]</option>";
                                        }
                                        ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <th><label for="image" class="text-white" class="me-2">Imagen*</label></th>
                                <td align="center">
                                    <input type="file" name="image" class="text-white" required />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="expanded button-group">
                                        <button type="reset" name="button" class="btn btn-secondary">Borrar</button>
                                        <button type="submit" name="submit" class="btn btn-secondary">Confirmar</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Inicia modales -->
    <div class="modal fade centro" id="contraseña" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ingrese cédula para nueva contraseña</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Ingrese un número de cédula válido" id="dato_cedula" required>
                        </div>
                        <br>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cancelar()">Cancelar</button>
                        <input type="submit" value="Solicitar" class="btn float-end btn-primary mx-1" onclick="mostrar()">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin modales -->
    <!--Javascript adicionales-->

    <!--Permite instalar popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--Permite instalar Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>