<?php
session_start();
include('../global/header.php')
?>

<body>
    <?php
    include('../global/menu.php')
    ?>

    <div class="container d-flex flex-column justify-content-center align-items-center flex-grow-1 mt-5 pt-5 mb-5">
        <div class="container-custom mt-5">
            <h2 class="text-center mb-4">Registro de Delitos</h2>
            <form action="../../controladores/delitos/crear.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de Delito</label>
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option value="">Seleccionar</option>
                                <option value="ROBO">ROBO</option>
                                <option value="HURTO">HURTO</option>
                                <option value="LESIONES">LESIONES</option>
                                <option value="AMENAZAS">AMENAZAS</option>
                                <option value="VIALIDAD">VIALIDAD</option>
                                <option value="HOMICIDIOS">HOMICIDIOS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="comuna" class="form-label">Comuna</label>
                            <input type="text" class="form-control" id="comuna" name="comuna" required>
                        </div>                                                
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha y hora</label>
                            <input type="datetime-local" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <div class="mb-3">
                            <label for="barrio" class="form-label">Barrio</label>
                            <input type="text" class="form-control" id="barrio" name="barrio" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="arma" class="form-label">¿Se Utilizó Algún Arma?</label>
                            <select class="form-select" id="arma" name="arma" required>
                                <option value="">Seleccionar</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>     
                    </div>
                    <div class="col-md-6">                   
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Oficial</label>
                            <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $_SESSION['loginUsuario']['id_usuarios'] ?>">
                            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $_SESSION['loginUsuario']['nombre'] ?>" readonly>
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