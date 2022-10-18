<?php

require_once "Task.php";

class User
{
private string $username;
private array $tasks = [];

public function __construct(string $username)
{
    $this->username = $username;
}

public function getUsername(): string
{
    return $this->username;
}

public function getTasks(): array
{
    return $this->tasks;
}

public function setTasks(Task $task): void
{
    $this->tasks[] = $task;
}

}