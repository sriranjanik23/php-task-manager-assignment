<?php

require_once 'src/TaskManager.php';

$taskManager = new TaskManager();

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'add':
        $title = $_GET['title'] ?? '';
        echo $taskManager->addTask($title);
        break;

    case 'list':
        echo $taskManager->listTasks();
        break;

    case 'update':
        $id = $_GET['id'] ?? null;
        $status = $_GET['status'] ?? '';
        echo $taskManager->updateTask($id, $status);
        break;

    case 'delete':
        $id = $_GET['id'] ?? null;
        echo $taskManager->deleteTask($id);
        break;

    default:
        echo json_encode(["error" => "Invalid action"]);
}