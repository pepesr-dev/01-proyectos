<?php 

function getTasks(PDO $pdo): array | bool{
    $sql = "
        SELECT id, tarea
        FROM tareas;
    ";

    try{
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(\PDOException $e){
        
        return false;
        
    }
}

function setTask(PDO $pdo, string $task):int | false{
    $sql = "
    
    INSERT INTO tareas (tarea)
    VALUES(:task);
    ";

    try{
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':task', $task);
        $stmt->execute();
        return (int) $pdo->lastInsertId(); 
    }catch(\PDOException $e){
        return false;
    }
}
    
?>