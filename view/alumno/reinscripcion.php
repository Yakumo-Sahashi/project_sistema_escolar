<?php
	if (!isset($_SESSION['user'])) {
		echo '<script> window.location="login" </script>';
	}else{
        if($_SESSION['user']['rol'] == "2"){
			echo '<script> window.location="docente" </script>';
		}
    }
?>
<div class="container py-4">
    <div class="row justify-content-around">
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body text-center">
                    <i class="fas fa-user fa-9x text-b"></i>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h3>Alumno</h3>
                            <hr>
                            <p class=""><b>Nombre: </b><?=$_SESSION['user']['email']?></p>
                            <p class=""><b>apellidos: </b><?=$_SESSION['user']['email']?></p>
                            <p class=""><b>Carrera: </b><?=$_SESSION['user']['email']?></p>
                            <p class=""><b>Semestre: </b><?=$_SESSION['user']['email']?></p>
                            <p class=""><b>No. control: </b><?=$_SESSION['user']['email']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 py-2 align-self-center">
            <div class="card">
                <div class="card-body bg-light">
                    <h3 class="card-title text-center ">Reinscripcion</h3>
                    <form action="model/archivo.php" method="post" enctype="multipart/form-data" id="filesForm">
                        <label for="ingreso_mail">No.Control</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card ml-1 text-b"></i></span>
                            </div>
                            <input type="text" class="form-control " id="control" name="control"
                            value="<?=$_SESSION['user']['carrera']?>" readonly>
                        </div>
                        <label for="carrera">Carrera</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book text-b"></i></span>
                            </div>
                            <input class="form-control" type="text" value="<?=$_SESSION['user']['carrera']?>" readonly>
                        </div>
                        <label for="carrera">Semestre</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><text-b class="fas fa-id-card-alt text-b"></i> </span>
                            </div>
                            <input class="form-control" type="text" value="<?=$_SESSION['user']['semestre']?>" readonly>
                        </div>

                        <label for="exampleInputEmail1">Comprobante de pago</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-upload text-b"></i></span>
                            </div>
                            <input type="file" name="archivo" class="form-control">
                        </div>
    
                        <button type="button" class="btn btn-primary btn-block btn-blue" id="subirArchivo">Inscribir</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <a class="btn btn-block btn-blue" href="docente">Volver al panel</a>
        </div>
    </div>
</div>
<script src="controller/funciones_archivo.js"></script>