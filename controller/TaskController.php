<?php

require_once "model/Task.php";
require_once "model/TaskProvider.php";
require_once "model/User.php";

session_start();


$taskProvider = new TaskProvider();

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task($taskText));

    header('Location: /?controller=tasks');
    die();
}

if (isset($_GET['actions']) && $_GET['actions'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->deleteTask($key);
    header('Location: /?controller=tasks');
    die();
}

$tasks = $taskProvider->getUndoneList();

include "view/tasks.php";