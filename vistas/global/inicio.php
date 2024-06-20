<?php 
    session_start();
    include("header.php");
?>

<body>
    <?php
        include('menu.php')
    ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="container-custom">
            <h2 class="mb-4 text-center">Dashboard</h2>
            <div class="row">
                <div class="card col-6" style="width: 18rem;">
                    <img src="../../recursos/img/policiainteligenciaartificial.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION['cuentaUsuario']; ?></h5>
                        <p class="card-text">Oficiales registrados</p>
                        <a href="../../controladores/usuarios/lista.php" class="btn btn-primary">Ver</a>
                    </div>
                </div>                
                <div class="card col-6" style="width: 18rem; margin-left:20px;">
                    <img src="../../recursos/img/policiainteligenciaartificial.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION['cuentaDelito']; ?></h5>
                        <p class="card-text">Delitos registrados</p>
                        <a href="../../controladores/delitos/lista.php" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include('footer.php')
    ?>    
</body>
</html>
