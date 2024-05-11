<?php

require_once __DIR__ . '/classes/Task_Status.php';
require_once __DIR__ . '/classes/Task_List.php';

$filename = 'tasks.txt';

$task_list = new Task_List($filename);

// Adding task
$task_list->add_task("Task 1", 2);
$task_list->add_task("Task 2", 1);
$task_list->add_task("Task 3", 3);

// Display task
$tasks = $task_list->get_tasks();
foreach ($tasks as $task_id => $task) {
    echo "ID: $task_id, Name: {$task['name']}, Priority: {$task['priority']}, Status: {$task['status']}<br>";
}

// Task ID
$task_id = $task_list->get_id_by_name("Task 2");

// Marking a task as completed
$task_list->complete_task($task_id);

// Display all tasks
$tasks = $task_list->get_tasks();
foreach ($tasks as $task_id => $task) {
    echo "ID: $task_id, Name: {$task['name']}, Priority: {$task['priority']}, Status: {$task['status']}<br>";
}

// Deleting task
$task_list->delete_task($task_id);