<?php
include("db.php");
include ('includes/header.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM alumno WHERE id_alumno = $id";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $id = $row['id_alumno'];
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $dni = $row['dni'];
        $telefono = $row['telefono'];
        $curso = $row['curso'];
        $actividad = $row['actividad'];
    }
}

    if(isset($_POST['update'])){

        $id = $_GET['id'];
        $nombre= $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $curso = $_POST['curso'];
        $actividad = $_POST['actividad'];

        $query = " UPDATE alumno SET nombre = '$nombre', apellidos = '$apellidos', dni = '$dni', telefono = '$telefono', curso = '$curso', actividad = '$actividad' WHERE id_alumno = '$id'";
        $result = mysqli_query($conn,$query);

        $_SESSION['mensaje'] = "Alumno actualizado correctamente";
        $_SESSION['tipo_mensaje'] = "success";
        header("Location: index.php"); 
    }

?>
<div class = "container">
    <div class="row">
        <div class="card card-body">
                <form action="editar_alumno.php?id=<?php echo $_GET['id']; ?>" method= "POST">
                    
                    <div class="form-group">
                        <input type="text" name="nombre" value = "<?php echo $nombre; ?>" class="form-control"  >
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" value = "<?php echo $apellidos; ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="dni" value = "<?php echo $dni; ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" value = "<?php echo $telefono; ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="curso" value = "<?php echo $curso; ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="actividad" value = "<?php echo $actividad; ?>" class="form-control" >
                    </div>
                    <button class="btn btn-primary" name="update" >Update</button>

                </form>
            
        </div>

    </div>

</div>
    
 
<?php 
include ('includes/footer.php');
?>
