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

    <title>LOG-IN</title>
</head>
<body>
    <div class="container" id="contenedor">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <br>
                    <h3 align=center>Ingreso</h3>
                    <div class="d-flex justify-content-end logo_icon">                        
                        <span><img src="../img/logo.png" alt=""></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <br>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="cedula" class="form-control" placeholder="cédula">
                        </div>
                        <br>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="passwd" class="form-control" placeholder="contraseña">
                        </div>
                        <br>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recuérdame
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Ingresar" class="btn float-end login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center"> 
                        <a class="text-primary btn" data-bs-toggle="modal" data-bs-target="#contraseña" onclick="ocultar()">Olvidó su contraseña?</a>
                    </div>
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
                    <form action="new_pass.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="newid" class="form-control" placeholder="Ingrese un número de cédula válido" id="dato_cedula" required>
                        </div>
                        <br>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cancelar()">Cancelar</button>
                        <input type="submit" name="Solicitar" value="Solicitar" class="btn float-end btn-primary mx-1" onclick="mostrar()">
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