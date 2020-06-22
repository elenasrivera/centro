<?php 
include("db.php");

if(isset($_POST['guardar_alumno'])){
      $nombre= $_POST['nombre'];
      $apellidos= $_POST['apellidos'];
      $dni= $_POST['dni'];
      $telefono= $_POST['telefono'];
      $curso= $_POST['curso'];
      $actividad= $_POST['actividad'];
    
    $query ="INSERT INTO alumno(nombre,apellidos,dni,telefono,curso,actividad) VALUES('$nombre','$apellidos','$dni','$telefono','$curso','$actividad')";
    
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed!");
    }else{
        $_SESSION['mensaje'] ="Alumno guardado correctamente";
        $_SESSION['tipo_mensaje'] = "succes";
       header("Location:index.php");
    }
    
}


?>