<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Oficiales</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #2c3e50;
        color: #ecf0f1;
        margin: 0;
        padding: 20px;
    }
    .table {
        background-color: #34495e;
    }
    .table thead th {
        color: #ecf0f1;
        background-color: #2c3e50;
    }
    .table tbody tr {
        color: #ecf0f1;
    }
    .btn-create {
        margin-bottom: 15px;
    }
</style>
<body>

<div class="container">
    <div class="d-flex justify-content-end">
        <button class="btn btn-success btn-create">Crear</button>
    </div>
    <div class="table-responsive">
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Email</th>
                    <th>Rango</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php 
    include('../../controladores/global/conexion.php');
    $sql=$conexion->query("SELECT * FROM usuario");
    while($datos=$sql->fetch_object()){?>
       <tr>
                    <td><?php echo $datos->nombre?></td>
                    <td><?php echo $datos->dni?></td>
                    <td><?php echo $datos->email?></td>
                    <td><?php echo $datos->rango?></td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
       <?php } 
        ?>
                <!-- Más filas aquí -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
