<?php
    include("connection_db.php");
    
    $consulta="SELECT * FROM notas";
    $consulta2="SELECT * FROM estudiante";
    $resultado=mysqli_query($conexion, $consulta);
    // $resultado2=mysqli_query($conexion, $consulta2);

    $row=mysqli_fetch_array($resultado);
    // $row2=mysqli_fetch_array($resultado2);

    if($row){
        echo "Conexion exitosa";
    }else{
        echo "Conexion fallida";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_notas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Notas docente</title>
</head>
<body>

<div class="container mt-5">

    <div class="row">

        <div class="col-md-3">
        <h1>Agregar nota</h1>
        <br>

        <form action="insertar.php" method="post">
                <input step="any" type="number" class="form-control mb-3" name="id_nota" placeholder="Id nota">
                <input type="text" class="form-control mb-3" name="nombre_nota" placeholder="Nombre nota">
                <input step="any" type="number" class="form-control mb-3" name="valor_nota" placeholder="Valor nota">
                <input type="text" class="form-control mb-3" name="descripcion_nota" placeholder="Descripcion">

                
                <input type="submit" class="btn btn-primary">

        </form>
        </div>

        <div class="col-md-8">
        <h1>Mostrar tabla</h1>
        <br>
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th>Id nota</th>
                    <th>Nombre nota</th>
                    <th>Valor nota</th>
                    <th>Descripcion</th>
                    
                </tr>
            </thead>

            <tbody>
                    <?php
                        while($row=mysqli_fetch_array($resultado)){
                    ?>
                        <tr>
                            <th><?php  echo $row['id_nota']?></th>
                            <th><?php  echo $row['nombre_nota']?></th>
                            <th><?php  echo $row['valor_nota']?></th>
                            <th><?php  echo $row['descripcion_nota']?></th>    
                            <th><a href="actualizar.php?id=<?php echo $row['id_nota'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete_notas.php?id=<?php echo $row['id_nota'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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