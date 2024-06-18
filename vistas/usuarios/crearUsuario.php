<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro de Usuario</title>
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
        margin-top: 100px; /* Incrementamos el margen superior */
        margin-bottom: 60px; /* Añadimos margen inferior */
        width: 600px; /* Ajustamos el ancho máximo para la vista horizontal */
    }
    .form-control {
        background-color: rgba(255, 255, 255, 0.2);
        color: #000;
    }
    .form-control:focus {
        background-color: rgba(255, 255, 255, 0.3);
        color: #000;
    }
    footer {
        background-color: #34495e;
        padding: 10px;
        text-align: center;
        width: 100%;
        bottom: 0;
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
        include('../global/menu.php')
    ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="container-custom">
            <h2 class="mb-4 text-center">Registrar Usuario</h2>
            <form action="controladores/usuarios/crear.php" method="POST">
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
                            <input type="text" class="form-control" name="rango" id="rango" placeholder="Ingrese su rango">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirme su contraseña">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <button type="reset" class="btn btn-danger">Borrar</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        include('../global/footer.php')
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
