<?php
$tasks_string = [
    "Learn PHP",
    "Learn Mysql",
    "Learn Laravel",
    "Read a book",
    "read kubernetes book",
    "read kubernetes book",
    "new task"
];
$tasks = json_encode($tasks_string, true);

echo $tasks;

// $tasks_string = file_get_contents('tasks.json');
// var_dump($tasks_string);
// $tasks = json_decode($tasks_string);
// var_dump($tasks);
