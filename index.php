<?php
require 'data/basededatos.php';
$sql = "SELECT * FROM `departamentos` WHERE 1;";
$listado = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1>listado de Departamentos</h1>
        <a href="nuevodepartamento.php" class="btn btn-secondary">Agregar Departamento</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Titutlo</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Habitaciones</th>
                    <th>Estacionamiento</th>
                </tr>
            </thead> 
            <tbody>
            <?php
                foreach($listado as $departamentos):
            ?>
                <tr>
                        <td><?php echo $departamentos['titulo'] ?></td>
                        <td><?php echo $departamentos['precio'] ?></td>
                        <td><?php echo $departamentos['descripcion'] ?></td>
                        <td><?php echo $departamentos['habitaciones'] ?></td>
                        <td><?php echo $departamentos['estacionamiento'] ?></td>
                        <td>
                            <a href="editardepartamento.php?id=<?php echo $departamentos['id'] ?>" class="btn btn-primary">Editar</a>
                        </td>
                </tr>       
            <?php
                endforeach;
            ?>
            </tbody>
        </table>
    </div>  
</body>
</html>