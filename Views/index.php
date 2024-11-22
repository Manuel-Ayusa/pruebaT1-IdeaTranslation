<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h3 class="mt-4 bg-warning text-center p-2">Lista</h3>
        <table class="col-9 table table-bordered table-hover table-striped table-info mt-5 align-middle"style="margin: 0 auto">
            <tr><th>Recurso</th><th>Nro. Proyecto</th><th>Fecha de orden</th><th>Nro. Tarea</th><th>Precio Unitario</th><th>Cantidad</th><th>Monto</th><th>Nro. de orden trabajo</th>
            <?php foreach ($tareas as $tarea) { 
                $created = explode(" ", $tarea->created) ?>
                <tr><td><?php echo $tarea->firstname . ' ' .$tarea->lastname;?></td>
                <td><?php echo $tarea->project_id;?> </td>
                <td><?php echo $created[0];?></td>
                <td><?php echo $tarea->task_id;?></td>
                <td><?php echo '-';?></td>
                <td><?php echo '-';?></td>
                <td><?php echo '-';?></td>
                <td><?php echo $tarea->order_work;?></td>
            <?php } ?>
        </table>
    </main>
</body>
</html>

