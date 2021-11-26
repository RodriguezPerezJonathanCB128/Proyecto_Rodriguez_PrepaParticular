<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM calificacion";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CALIFICACIONES</title>
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

                                    <input type="text" class="form-control mb-3" name="IdProfesor" placeholder="IdProfesor">
                                    <input type="text" class="form-control mb-3" name="Num_Control_Alumno" placeholder="Num_Control_Alumno">
                                    <input type="text" class="form-control mb-3" name="Calif_Unidad_I" placeholder="Calif_Unidad_I">
                                    <input type="text" class="form-control mb-3" name="Calif_Unidad_II" placeholder="Calif_Unidad_II">
                                    <input type="text" class="form-control mb-3" name="Calif_Unidad_III" placeholder="Calif_Unidad_III">
                                    <input type="text" class="form-control mb-3" name="Promedio" placeholder="Promedio">
                                    <input type="text" class="form-control mb-3" name="IdMateria" placeholder="IdMateria">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Rodriguez_PrepaParticular/Index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdProfesor</th>
                                        <th>Num_Control_Alumno</th>
                                        <th>Calif_Unidad_I</th>
                                        <th>Calif_Unidad_II</th>
                                        <th>Calif_Unidad_III</th>
                                        <th>Promedio</th>
                                        <th>IdMateria</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdProfesor']?></th>
                                                <th><?php  echo $row['Num_Control_Alumno']?></th>
                                                <th><?php  echo $row['Calif_Unidad_I']?></th>
                                                <th><?php  echo $row['Calif_Unidad_II']?></th>   
                                                <th><?php  echo $row['Calif_Unidad_III']?></th> 
                                                <th><?php  echo $row['Promedio']?></th> 
                                                <th><?php  echo $row['IdMateria']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['Promedio'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Promedio'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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