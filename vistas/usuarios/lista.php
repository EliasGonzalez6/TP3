<?php 
    session_start();
    include("../global/header.php");
?>

<body>
    <?php
        include('../global/menu.php')
    ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="container-custom">
            <h2 class="mb-4 text-center">Lista de Oficiales</h2>
            <div class="d-flex justify-content-end">                
                <a class="btn btn-success btn-create" href="crear.php">Crear</a>
            </div>
                <div class="table-responsive">                    
                    <table class="table table-dark table-striped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Email</th>
                                <th>Rango</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php                         
                            foreach($_SESSION['listaUsuarios'] as $usuario) {
                        ?>
                            <tr>
                                <td><?php echo $usuario['nombre']?></td>
                                <td><?php echo $usuario['dni']?></td>
                                <td><?php echo $usuario['email']?></td>
                                <td><?php echo $usuario['rango']?></td>
                                <td>         
                                    <?php if($_SESSION['loginUsuario']['rango']=='COMISARIO' || $_SESSION['loginUsuario']['rango']=='SUPERVISOR') {?>                
                                        <form action="../../controladores/usuarios/editar.php" method="POST" style="display: inline-block;">
                                            <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuarios']?>">
                                            <button type="submit" class="btn btn-outline-primary btn-sm">Editar</button>
                                        </form>
                                    <?php }?>
                                    <?php if($_SESSION['loginUsuario']['rango']=='COMISARIO') {?>                      
                                        <form action="../../controladores/usuarios/eliminar.php" method="POST" style="display: inline-block;">              
                                            <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuarios']?>">
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Elminar</button>
                                        </form>                                    
                                    <?php }?>
                                </td>
                            </tr>
                        <?php 
                            } 
                        ?>                           
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>    
    <?php
        include('../global/footer.php')
    ?>    
</body>
</html>