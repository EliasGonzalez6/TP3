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
            <div class="row">
                <div class="col-md-5 col-sm-12 text-center mb-3 mb-md-0">
                    <img src="../../recursos/img/policiainteligenciaartificial.avif" alt="Profile Image" class="profile-image mb-3">
                </div>
                <div class="col-md-7 col-sm-12">
                    <h2 class="mb-4">Mi Perfil</h2>
                    <div class="mb-3">
                        <strong>Nombre:</strong> <?php echo $_SESSION['loginUsuario']['nombre']; ?>
                    </div>
                    <div class="mb-3">
                        <strong>Rango:</strong> <?php echo $_SESSION['loginUsuario']['rango']; ?>
                    </div>
                    <div class="mb-3">
                        <strong>Unidad:</strong> Policía de la Ciudad
                    </div>
                    <div class="mb-3">
                        <strong>DNI:</strong> <?php echo $_SESSION['loginUsuario']['dni']; ?>
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> <?php echo $_SESSION['loginUsuario']['email']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../global/footer.php')
    ?>
</body>

</html>