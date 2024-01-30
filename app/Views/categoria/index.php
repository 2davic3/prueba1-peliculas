<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Listado Categorias</h1>

    <a href="/categoria/new">Crear</a>

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
                <td>
                    <a href="/categoria/show/<?php echo $p['id'];?>">show</a>
                    <a href="/categoria/edit/<?php echo $p['id'];?>">Edit</a>
                    <form action="/categoria/delete/<?php echo $p['id'];?>" method="post">

                        <button type="submit">Eliminar</button>
                    </form>
                    
                </td>
            </tr>
            <?php  }  ?>        
    </table>

</body>
</html>