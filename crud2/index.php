<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   
<h1 class="text-center p-3">Crud</h1>

<div class="conteiner-fluid row"></div>

    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de personas:</h3>

        <?php
            include "modelo/conexion.php";
            include "controlador/registro_personas.php";
            
        ?>

        
     
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="Nombre">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido paterno:</label>
            <input type="text" class="form-control" name="Ap_paterno">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido materno:</label>
            <input type="text" class="form-control" name="Ap_materno">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo:</label>
            <input type="text" class="form-control" name="Correo">
        </div>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>

<div class="col-8 p-4">
    <table class="table">
        <thead class="bg-info">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Correo</th>
            
        </tr>
    </thead>
    <tbody>
            <?php
                include "modelo/conexion.php";
                $sql=$conexion->query("select * from usuarios");
                while($datos=$sql->fetch_object()){ ?>

                <tr>
           
                        <td><?= $datos->id_usuario?></td>
                        <td><?= $datos->Nombre?></td>
                        <td><?= $datos->Ap_paterno?></td>
                        <td><?= $datos->Ap_materno?></td>
                        <td><?= $datos->Correo?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
                <?php }
                
            ?>
    </tbody>
</table>

</div>













<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>