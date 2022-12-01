<?php

$string_tasks = file_get_contents('tasks.json');
$array_tasks = json_decode($string_tasks);

if (isset($_POST['newTask'])) {
    $taskString = $_POST['newTask'];
    array_unshift($array_tasks, $taskString);
    $tasks = json_encode($array_tasks);
    file_put_contents('$tasks.json', $tasks);
}

header('Content-Type: application/json');

echo json_encode($array_tasks);
