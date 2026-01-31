<?php 
require_once __DIR__ . "/../functions/dbconn.php";
require_once __DIR__ . "/../functions/dao.php";

$pdo = connectDB();

/**
 * Procesar actualización de datos.
 * Actualizar tarea si el ID y la TAREA NUEVA son correctos.
 * Mostrar tarea actualizada.
 */

//Inicializar variables vara evitar UNDEFINED
$row_count = null;
$new_task = null;

if($_SERVER['REQUEST_METHOD']==='POST'){
    //isset / formato / lógica de negocio (tarea ya almacenada)

    //ISSET
    $task_id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

    //TRIM: para evitar almacenar espacios vacíos
    $new_task = isset($_POST['task']) ? trim($_POST['task']) : "";


    //FORMATO
    if($task_id > 0 && !empty($new_task)){

        $row_count = updateTaskById($pdo,  $task_id,  $new_task);
        
        $task_data = getTaskById($pdo, $task_id);

    } else {
        echo "La tarea no pudo ser actualizada.";
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
</head>
<body>
    <!--Mostrar tarea si los datos son correctos-->
    <h1>Resultado de la actualización</h1>
    
    <?php if($row_count > 0): ?>
        
        <p>Tarea almacenada con exito.</p>
        <p>Tarea nueva: <?php echo htmlspecialchars($task_data['tarea']); ?></p>
    <?php else: ?>
        <p>La tarea no pudo ser actualizada.</p>
    <?php endif; ?>


    <a href="../index.php">Inicio</a>
</body>
</html>