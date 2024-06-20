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
            <h2 class="mb-4 text-center">Lista de Delitos</h2>
            <div class="d-flex justify-content-end">
                <a class="btn btn-success btn-create" href="crear.php">Crear</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Tipo de Delito</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Mes</th>
                            <th scope="col">Día de la Semana</th>
                            <th scope="col">Comuna</th>
                            <th scope="col">Barrio</th>
                            <th scope="col">Uso de Arma</th>
                            <th scope="col">Oficial</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php                         
                            foreach($_SESSION['listaDelitos'] as $delito) {
                        ?>                       
                            <tr>
                                <td><?php echo $delito['tipo_delito']?></td>
                                <td><?php echo $delito['hora']?></td>                                
                                <td><?php echo $delito['nombre_mes']?></td>                                
                                <td><?php echo $delito['nombre_dia']?></td>                                                                
                                <td><?php echo $delito['Comuna']?></td>
                                <td><?php echo $delito['Barrio']?></td>
                                <td><?php echo $delito['uso_arma']?></td>                                
                                <td><?php echo $delito['oficialNombre']?></td>
                                <td>                      
                                    <form action="../../controladores/delitos/editar.php" method="POST" style="display: inline-block;">
                                        <input type="hidden" name="id_delito" value="<?php echo $delito['id_delito']?>">
                                        <button type="submit" class="btn btn-outline-primary btn-sm">Editar</button>
                                    </form>
                                    <form action="../../controladores/delitos/eliminar.php" method="POST" style="display: inline-block;">              
                                        <input type="hidden" name="id_delito" value="<?php echo $delito['id_delito']?>">
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Elminar</button>
                                    </form>                                    
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