<?php

session_start();

if(!$_SESSION["nombreAdmin"]){

	header("location:ingreso");

	exit();

}

?>
<body class="body">
    <div class="mains">
        <div class="card bg-info">
            <div class="card-block">
                Esta sección es exclusiva para  Usuarios del sistema.
            </div>
        </div>
        <br>
            <div class="row">
                <!-- <center> -->
                <div class="col-lg-5">
                    <figure>
                        <img height="300" src="views/bootstrap/img/logsin.png">
                        </img>
                    </figure>
                </div>
                <!-- </center> -->
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-block">
                            <h2>
                                Bienvenido Usuario
                            </h2>
                            <div class="alert alert-info">
                                <h3>
                                    <strong>
                                        <?php echo strtoupper($_SESSION['nombreAdmin']); ?>
                                    </strong>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
		$admin = new Admin();
		$admin->
            fecha();
		?>
        </br>
    </div>
</body>