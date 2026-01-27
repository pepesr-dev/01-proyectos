<?php 
require_once __DIR__ . "/../functions/dbconn.php";
require_once __DIR__ . "/../functions/dao.php";
$pdo = connectDB();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $task = $_POST['task'] ?? '';


    if(!empty($task)){
        $task_id = setTask($pdo, $task);

        if($task_id){
            echo "Insertado";
        } else {
            echo "error de inserción";
        }
    } else {
        echo "error: campo vacío";
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
    <a href="./../index.php">Inicio</a>
    <a href="./form-insert-task.php">Insertar</a>
    
</body>
</html>