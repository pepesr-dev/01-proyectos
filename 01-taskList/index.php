<?php

require_once __DIR__ . "/functions/dbconn.php";
require_once __DIR__ . "/functions/dao.php";
$pdo = connectDB();
$tasks = getTasks($pdo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
</head>

<body>

    <header>
        <img src="" alt="">
        <h1>Lista de tareas</h1>

    </header>
    <main>
        <a href="./insert/form-insert-task.php">Insertar</a><br>

        <table>
            <thead>
                <th>Tareas</th>

            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo $task['tarea']; ?></td>
                        <td>
                            <form action="./delete/confirm-delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2026 Lista de tareas</p>
    </footer>
</body>

</html>