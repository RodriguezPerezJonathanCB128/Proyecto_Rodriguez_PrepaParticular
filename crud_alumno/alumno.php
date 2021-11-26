<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Num_Control" placeholder="Num_Control">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="E-Mail" placeholder="E-Mail">
                                    <input type="text" class="form-control mb-3" name="Semestre" placeholder="Semestre">
                                    <input type="text" class="form-control mb-3" name="Especialidad" placeholder="Especialidad">
                                    <input type="text" class="form-control mb-3" name="Num_Telefono" placeholder="Num_Telefono">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Rodriguez_PrepaParticular/Index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Num_Control</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>E-Mail</th>
                                        <th>Semestre</th>
                                        <th>Especialidad</th>
                                        <th>Num_Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Num_Control']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['E-Mail']?></th>   
                                                <th><?php  echo $row['Semestre']?></th> 
                                                <th><?php  echo $row['Especialidad']?></th>
                                                <th><?php  echo $row['Num_Telefono']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['Num_Control'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Num_Control'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>