<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM materias";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA MATERIAS</title>
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

                                <input type="text" class="form-control mb-3" name="IdMateria" placeholder="IdMateria">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="Semestre_en_que_se da" placeholder="Semestre_en_que_se_da">
                                    <input type="text" class="form-control mb-3" name="Unidades_en_total" placeholder="Unidades_en_total">
                                    <input type="text" class="form-control mb-3" name="Practicas" placeholder="Practicas">
                                    <input type="text" class="form-control mb-3" name="Creditos" placeholder="Creditos">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Rodriguez_PrepaParticular/Index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdMateria</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Semestre en que se da</th>
                                        <th>Unidades en total</th>
                                        <th>Practicas</th>
                                        <th>Creditos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdMateria']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Descripcion']?></th>
                                                <th><?php  echo $row['Semestre_en_que_se_da']?></th>   
                                                <th><?php  echo $row['Unidades_en_total']?></th> 
                                                <th><?php  echo $row['Practicas']?></th> 
                                                <th><?php  echo $row['Creditos']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['IdMateria'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IdMateria'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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