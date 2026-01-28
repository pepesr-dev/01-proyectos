<?php 
require_once __DIR__ . "/../functions/dbconn.php";
require_once __DIR__ . "/../functions/dao.php";

if($_SERVER['REQUEST_METHOD']==="POST"){
    $task_id = (int) $_POST['id'] ?? 0;

    if(!empty($task_id)){
        $task = 
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
    <h1>Confirmar eliminación</h1>
    
</body>
</html>