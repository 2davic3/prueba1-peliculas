<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista</title>
</head>
<body>
    <h1>Aqui van las vistas</h1>
    <?php //echo $nombreVariableVista; ?>
    <?php //echo $nombreVariableVista2; ?>
    <?php //echo $nombreVariableVista3; ?>
    <?php /*foreach($array as $array){
        echo "<p>".$array."</p>    ";
        }*/
    ?>

    <a href="/pelicula/new">Crear</a>

    <table>
        <tr>
            <th>
                Id
            </th>
            <th>
                Titulo
            </th>
            <th>
                Descripción
            </th>
            <th>
                Opciones
            </th>
        </tr>
        <?php foreach($nombreVariableVista as $p){ ?>   
            <tr>
                <td><?php echo $p['id'];?></td>
                <td><?php echo $p['titulo'];?></td>
                <td><?php echo $p['descripcion'];?></td>
                <td>
                    <a href="/pelicula/show/<?php echo $p['id'];?>">show</a>
                    <a href="/pelicula/edit/<?php echo $p['id'];?>">Edit</a>
                    <form action="/pelicula/delete/<?php echo $p['id'];?>" method="post">

                        <button type="submit">Eliminar</button>
                    </form>
                    
                </td>
            </tr>
            <?php  }  ?>        
    </table>

</body>
</html>