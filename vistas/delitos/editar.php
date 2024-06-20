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
            <h2 class="text-center mb-4">Editar Delito</h2>
            <form action="../../controladores/delitos/modificar.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de Delito</label>
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option value="">Seleccionar</option>
                                <?php if($_SESSION['editarDelito']['tipo_delito'] == "ROBO"){?>
                                    <option value="ROBO" selected>ROBO</option>
                                    <option value="HURTO">HURTO</option>
                                    <option value="LESIONES">LESIONES</option>
                                    <option value="AMENAZAS">AMENAZAS</option>
                                    <option value="VIALIDAD">VIALIDAD</option>
                                    <option value="HOMICIDIOS">HOMICIDIOS</option>                         
                                <?php }elseif($_SESSION['editarDelito']['tipo_delito'] == "HURTO"){?>
                                    <option value="ROBO">ROBO</option>
                                    <option value="HURTO" selected>HURTO</option> 
                                    <option value="LESIONES">LESIONES</option>
                                    <option value="AMENAZAS">AMENAZAS</option>
                                    <option value="VIALIDAD">VIALIDAD</option>
                                    <option value="HOMICIDIOS">HOMICIDIOS</option>
                                <?php }elseif($_SESSION['editarDelito']['tipo_delito'] == "LESIONES"){?>
                                    <option value="ROBO">ROBO</option>
                                    <option value="HURTO">HURTO</option> 
                                    <option value="LESIONES" selected>LESIONES</option>
                                    <option value="AMENAZAS">AMENAZAS</option>
                                    <option value="VIALIDAD">VIALIDAD</option>
                                    <option value="HOMICIDIOS">HOMICIDIOS</option>
                                <?php }elseif($_SESSION['editarDelito']['tipo_delito'] == "AMENAZAS"){?>
                                    <option value="ROBO">ROBO</option>
                                    <option value="HURTO">HURTO</option> 
                                    <option value="LESIONES">LESIONES</option>
                                    <option value="AMENAZAS" selected>AMENAZAS</option>
                                    <option value="VIALIDAD">VIALIDAD</option>
                                    <option value="HOMICIDIOS">HOMICIDIOS</option>
                                <?php }elseif($_SESSION['editarDelito']['tipo_delito'] == "VIALIDAD"){?>
                                    <option value="ROBO">ROBO</option>
                                    <option value="HURTO">HURTO</option> 
                                    <option value="LESIONES">LESIONES</option>
                                    <option value="AMENAZAS">AMENAZAS</option>
                                    <option value="VIALIDAD" selected>VIALIDAD</option>
                                    <option value="HOMICIDIOS">HOMICIDIOS</option>
                                <?php }else{?>
                                    <option value="ROBO">ROBO</option>
                                    <option value="HURTO">HURTO</option> 
                                    <option value="LESIONES">LESIONES</option>
                                    <option value="AMENAZAS">AMENAZAS</option>
                                    <option value="VIALIDAD">VIALIDAD</option>
                                    <option value="HOMICIDIOS" selected>HOMICIDIOS</option>
                                <?php } ?>                                                                                    
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="comuna" class="form-label">Comuna</label>
                            <input type="text" class="form-control" id="comuna" name="comuna" value="<?php echo $_SESSION['editarDelito']['Comuna'] ?>" required>
                        </div>                                                
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha y hora</label>
                            <input type="datetime-local" class="form-control" id="fecha" name="fecha" required value="<?php echo $_SESSION['editarDelito']['fecha'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="barrio" class="form-label">Barrio</label>
                            <input type="text" class="form-control" id="barrio" name="barrio" required value="<?php echo $_SESSION['editarDelito']['Barrio'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="arma" class="form-label">¿Se Utilizó Algún Arma?</label>
                            <select class="form-select" id="arma" name="arma" required>
                                <option value="">Seleccionar</option>
                                <?php if($_SESSION['editarDelito']['uso_arma'] == "SI"){?>
                                    <option value="SI" selected>SI</option>
                                    <option value="NO">NO</option>
                                <?php }else{?>
                                    <option value="SI">SI</option>
                                    <option value="NO" selected>NO</option>
                                <?php } ?> 
                            </select>
                        </div>     
                    </div>
                    <div class="col-md-6">                   
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Oficial</label>                            
                            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $_SESSION['loginUsuario']['nombre'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-4">
                    <button type="submit" class="btn btn-success" style="margin-right:10px;">Editar</button>
                    <a class="btn btn-danger" href="../../controladores/delitos/lista.php">Volver</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    include('../global/footer.php')
    ?>
</body>

</html>