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
                        </tr>
                    </thead>
                    <tbody>                        
                        <tr>
                            <td>Robo</td>
                            <td>14:00</td>
                            <td>Enero</td>
                            <td>Lunes</td>
                            <td>Comuna 14</td>
                            <td>Palermo</td>
                            <td>Sí</td>
                            <td>Oficial Pérez</td>
                        </tr>                                               
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