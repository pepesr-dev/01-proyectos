<?php 
require_once __DIR__ . "/../functions/dbconn.php";
require_once __DIR__ . "/../functions/dao.php";

$pdo = connectDB();



if($_SERVER['REQUEST_METHOD']==="POST"){
    $task_id = (int) $_POST['id'] ?? 0;

    if(!empty($task_id)){
        $count_row = delTaskById($pdo, $task_id);
    } else {
        echo "Error: Eliminación fallida";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="../src/css/styles.css">
</head>
<body>
    <header>
        <img class="logo" src="../src/icons/TaskList-v9.svg" alt="logo">
        <h1>Lista de tareas</h1>

    </header>
    <main>
        <h1>Confirmar eliminación</h1>
        
        <?php 
            if($count_row > 0){
                echo "Tarea eliminada<br>";
            }
        ?>
        <a href="./../index.php">Inicio</a>
    </main>
    
</body>
</html>