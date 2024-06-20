<?php
    session_start();
    include('../global/header.php')
?>

<body>
    <?php
        include('../global/menu.php')
    ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="container-custom">
            <h2 class="mb-4 text-center">Editar Oficial</h2>
            <form action="../../controladores/usuarios/modificar.php" method="POST">
                <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['editarUsuario']['id_usuarios']?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" value="<?php echo $_SESSION['editarUsuario']['nombre'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="dni" class="form-label">DNI</label>
                            <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese su DNI" value="<?php echo $_SESSION['editarUsuario']['dni'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email" value="<?php echo $_SESSION['editarUsuario']['email'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rango" class="form-label">Rango</label>
                            <select class="form-control" name="rango" id="rango">
                                <?php if($_SESSION['editarUsuario']['rango'] == "COMISARIO"){?>
                                    <option value="COMISARIO" selected>COMISARIO</option>
                                    <option value="SUPERVISOR">SUPERVISOR</option>
                                    <option value="OFICIAL">OFICIAL</option>                            
                                <?php }elseif($_SESSION['editarUsuario']['rango'] == "SUPERVISOR"){?>
                                    <option value="COMISARIO">COMISARIO</option>
                                    <option value="SUPERVISOR" selected>SUPERVISOR</option>
                                    <option value="OFICIAL">OFICIAL</option>
                                <?php }else{?>
                                    <option value="COMISARIO">COMISARIO</option>
                                    <option value="SUPERVISOR">SUPERVISOR</option>
                                    <option value="OFICIAL" selected>OFICIAL</option>
                                <?php } ?>
                            </select>
                            <!--<input type="text" class="form-control" name="rango" id="rango" placeholder="Ingrese su rango">-->
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña" value="<?php echo $_SESSION['editarUsuario']['clave'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirme su contraseña" value="<?php echo $_SESSION['editarUsuario']['clave'] ?>">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-success">Editar</button>
                    <a class="btn btn-danger" href="../../controladores/usuarios/lista.php">Volver</a>                    
                </div>
            </form>
        </div>
    </div>

    <?php
        include('../global/footer.php')
    ?>    
</body>
</html>
