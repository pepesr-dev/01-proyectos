-- Active: 1763319882062@@127.0.0.1@3306@db_taskList
CREATE table tareas(
    id int AUTO_INCREMENT PRIMARY KEY,
    tarea TEXT NOT NULL
);
insert INTO tareas (tarea) VALUES ('Insertar'), ('Eliminar');