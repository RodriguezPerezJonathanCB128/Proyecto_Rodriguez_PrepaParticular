<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM profesor WHERE IdProfesor='$id'";
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
                    
                                <input type="hidden" name="IdProfesor" value="<?php echo $row['IdProfesor']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="E-Mail" placeholder="E-Mail" value="<?php echo $row['E-Mail']  ?>">
                                <input type="text" class="form-control mb-3" name="Especialidad_del_profesor" placeholder="Especialidad_del_profesor" value="<?php echo $row['Especialidad_del_profesor']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion_del_profesor" placeholder="Direccion_del_profesor" value="<?php echo $row['Direccion_del_profesor']  ?>">
                                <input type="text" class="form-control mb-3" name="Num_Telefono" placeholder="Num_Telefono" value="<?php echo $row['Num_Telefono']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>