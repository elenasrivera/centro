<?php
include("db.php");
include ('includes/header.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = " DELETE FROM alumno WHERE id_alumno = $id ";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("No se encontraron datos");
    }
    $_SESSION['mensaje'] = "Alumno eliminado correctamente";
    $_SESSION['tipo_mensaje'] = "success";

    header("Location: index.php");
}
?>

<?php 
include ('includes/footer.php');
?>