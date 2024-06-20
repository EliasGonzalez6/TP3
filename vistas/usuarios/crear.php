<?php
    include('../global/header.php')
?>

<body>
    <?php
        include('../global/menu.php')
    ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="container-custom">
            <h2 class="mb-4 text-center">Registrar Oficial</h2>
            <form action="../../controladores/usuarios/crear.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo">
                        </div>
                        <div class="mb-3">
                            <label for="dni" class="form-label">DNI</label>
                            <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese su DNI">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rango" class="form-label">Rango</label>
                            <select class="form-control" name="rango" id="rango">
                                <option value="COMISARIO">COMISARIO</option>
                                <option value="SUPERVISOR">SUPERVISOR</option>
                                <option value="OFICIAL">OFICIAL</option>                            
                            </select>
                            <!--<input type="text" class="form-control" name="rango" id="rango" placeholder="Ingrese su rango">-->
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirme su contraseña">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-4">
                    <button type="submit" class="btn btn-success" style="margin-right:10px;">Registrar</button>
                    <button type="reset" class="btn btn-danger">Borrar</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        include('../global/footer.php')
    ?>    
</body>
</html>
