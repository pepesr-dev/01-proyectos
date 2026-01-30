<?php 
require_once __DIR__ . "/../functions/dao.php";
require_once __DIR__ . "/../functions/dbconn.php";
$pdo = connectDB();

$task_data = null;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $task_id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

    if($task_id > 0){
        $task_data = getTaskById($pdo, $task_id);
    } else {
        echo "Error: ID de la tarea inválido";
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
    <?php if($task_data): ?>
        <h1>Tarea encontrada:</h1>
        <p>ID: <?php echo $task_data['id'];  ?></p>
        <p>Tarea: <?php echo $task_data['tarea'];  ?></p>

        <br>
        <form action="./proces-update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $task_data['id']; ?>">
            <label>Tarea Nueva: <input type="text" name="task"></label>
            <input type="submit" value="Actualizar">
        </form>
        <?php else: ?>
            <p>No hay tareas seleccionadas.</p>
        <?php endif; ?>
    <a href="../index.php">Inicio</a>
</body>
</html>