<?php
include("db.php");
include ('includes/header.php');
?>
<div class="container p-4">
    <div class="col md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Curso</th>
                    <th>Actividad</th>
                    <th>Accciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM alumno";
                    $result = mysqli_query($conn,$query);
                    $row = mysqli_fetch_array($result);
                   
                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td> <?php echo $row['id_alumno'] ?></td>
                            <td> <?php echo $row['nombre'] ?></td>
                            <td> <?php echo $row['apellidos'] ?></td>
                            <td> <?php echo $row['dni'] ?></td>
                            <td> <?php echo $row['telefono'] ?></td>
                            <td> <?php echo $row['curso'] ?></td>
                            <td> <?php echo $row['actividad'] ?></td>
                            <td> <a href="editar_alumno.php?id=<?php echo $row['id_alumno']?>" class="btn btn-primary">
                            <i class="fas fa-pencil-alt"></i></a>
                            <a href="borrar_alumno.php?id=<?php echo $row['id_alumno']?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                  <?php } ?>         

                 
            </tbody>
        </table>
    </div>

</div>






<?php 
include ('includes/footer.php');
?>
