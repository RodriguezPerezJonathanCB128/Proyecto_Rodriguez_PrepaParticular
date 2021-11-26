<?php

include("conexion.php");
$con=conectar();

$idprofesor=$_POST['IdProfesor'];
$num_control_alumno=$_POST['Num_Control_Alumno'];
$calif_unidad_i=$_POST['Calif_Unidad_I'];
$calif_unidad_ii=$_POST['Calif_Unidad_II'];
$calif_unidad_iii=$_POST['Calif_Unidad_III'];
$promedio=$_POST['Promedio'];
$idmateria=$_POST['IdMateria'];

$sql="UPDATE calificacion SET `IdProfesor`='$idprofesor', `Num_Control_Alumno`='$num_control_alumno', `Calif_Unidad_I`='$calif_unidad_i', `Calif_Unidad_II`='$calif_unidad_ii', `Calif_Unidad_III`='$calif_unidad_iii', `IdMateria`='$idmateria' WHERE `Promedio`='$promedio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: calificaciones.php");
    }
?>