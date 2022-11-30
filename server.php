<?php
// $tasks_string = [
//     "Learn PHP",
//     "Learn Mysql",
//     "Learn Laravel",
//     "Read a book",
//     "read kubernetes book",
//     "read kubernetes book",
//     "new task"
// ];

$tasks = file_get_contents('tasks.json');

echo $tasks;
