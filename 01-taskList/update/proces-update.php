<?php 
require_once __DIR__ . "/../functions/dbconn.php";
require_once __DIR__ . "/../functions/dao.php";
$pdo = connectDB();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $task_id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $new_task = isset($_POST['task']) ? $_POST['task'] : "";

    if($task_id > 0){
        $row_count = updateTaskById($pdo,  $task_id,  $new_task);
        $task_data = getTaskById($pdo, $task_id);
    } else {
        echo "Error: Actualización fallida.";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
</head>
<body>
    <?php if($row_count > 0): ?>
        
        <p>Tarea nueva: <?php echo $task_data['tarea']; ?></p>
    <?php else: ?>
        <p>Actualización fallida</p>
    <?php endif; ?>
    <a href="../index.php">Inicio</a>
</body>
</html>