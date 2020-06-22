<?php include ('db.php');
include ('includes/header.php');

?>

<div class="cotainer p-4">
    <div class="row">
        <div class="col-md-7">
        
        <?php 
            if(isset($_SESSION['mensaje'])){ ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensaje']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['mensaje']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         <?php session_unset(); } ?>            
        
            <div class="card card-body">
                <form action="guardar_alumno.php" method="POST">
                    
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocous>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" autofocous>
                    </div>
                    <div class="form-group">
                        <input type="text" name="dni" class="form-control" placeholder="DNI" autofocous>
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono" autofocous>
                    </div>
                    <div class="form-group">
                        <input type="text" name="curso" class="form-control" placeholder="Curso" autofocous>
                    </div>
                    <div class="form-group">
                        <input type="text" name="actividad" class="form-control" placeholder="Actividad" autofocous>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="guardar_alumno" value="Matrícula">

                </form>
            </div>
        </div>

    </div>

</div>


<?php 
include ('includes/footer.php');
?>
