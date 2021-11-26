<?php
include("conexion.php");
$con=conectar();

$idmateria=$_POST['IdMateria'];
$nombre=$_POST['Nombre'];
$descripcion=$_POST['Descripcion'];
$semestre_en_que_se_da=$_POST['Semestre_en_que_se_da'];
$unidades_en_total=$_POST['Unidades_en_total'];
$practicas=$_POST['Practicas'];
$creditos=$_POST['Creditos'];

$sql="INSERT INTO `materias`(`IdMateria`, `Nombre`, `Descripcion`, `Semestre_en_que_se_da`, `Unidades_en_total`, `Practicas`, `Creditos`) VALUES ('$idmateria','$nombre','$descripcion','$semestre_en_que_se_da','$unidades_en_total','$practicas','$creditos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: materia.php");
    
}else {
}
?>