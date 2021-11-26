<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM materias WHERE IdMateria='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="IdMateria" value="<?php echo $row['IdMateria']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="Semestre_en_que_se_da" placeholder="Semestre_en_que_se_da" value="<?php echo $row['Semestre_en_que_se_da']  ?>">
                                <input type="text" class="form-control mb-3" name="Unidades_en_total" placeholder="Unidades_en_total" value="<?php echo $row['Unidades_en_total']  ?>">
                                <input type="text" class="form-control mb-3" name="Practicas" placeholder="Practicas" value="<?php echo $row['Practicas']  ?>">
                                <input type="text" class="form-control mb-3" name="Creditos" placeholder="Creditos" value="<?php echo $row['Creditos']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>