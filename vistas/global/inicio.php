<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inicio - Estadísticas de Delitos</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background: url('https://us.123rf.com/450wm/sbhaumik/sbhaumik2306/sbhaumik230600070/216973109-luz-de-emergencia-del-coche-patrulla-de-la-polic%C3%ADa-en-la-calle-por-la-noche.jr=6') center/cover no-repeat;
        color: #000;
        margin: 0;
    }
    .navbar {
        background-color: #34495e;
    }
    .navbar .navbar-brand,
    .navbar-nav .nav-link {
        color: #ecf0f1 !important;
    }
    .navbar-brand img {
        max-height: 45px; 
        width: auto; 
    }
    .container-custom {
        background-color: #dbdbdbcc;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        margin-top: 100px;
        margin-bottom: 60px;
    }
    .form-control {
        background-color: rgba(255, 255, 255, 0.2);
        color: #ecf0f1;
    }
    .form-control:focus {
        background-color: rgba(255, 255, 255, 0.3);
        color: #ecf0f1;
    }
    footer {
        background-color: #34495e;
        padding: 10px;
        text-align: center;
        width: 100%;
        bottom: 0;
        position: fixed;
    }
    footer p {
        margin: 0;
        color: #ecf0f1;
    }
    /* Media query para dispositivos móviles */
    @media (max-width: 767px) {
        footer {
            position: relative; /* Cambia la posición a relativa en dispositivos móviles */
        }
    }
</style>

<body>
    <?php
        include('menu.php')
    ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="container-custom">
            <h2 class="mb-4 text-center">Estadísticas de Delitos</h2>
            <div class="card" style="width: 18rem;">
                <img src="../../recursos/img/policiainteligenciaartificial.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_SESSION['CuentaUsuario']; ?></h5>
                    <p class="card-text">Oficiales registrados</p>
                    <a href="../usuarios/crearUsuario.php" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
    </div>

    <?php
        include('footer.php')
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
