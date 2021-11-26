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

$sql="UPDATE materias SET `Nombre`='$nombre', `Descripcion`='$descripcion', `Semestre_en_que_se_da`='$semestre_en_que_se_da', `Unidades_en_total`='$unidades_en_total', `Practicas`='$practicas', `Creditos`='$creditos' WHERE `IdMateria`='$idmateria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: materia.php");
    }
?>