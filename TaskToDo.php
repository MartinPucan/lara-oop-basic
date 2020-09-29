<?php

class TaskToDo {
	public $description;

	public $completed = true;

	public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = null;
    }
}

$task = new TaskToDo('Learn OOP');
var_dump($task->completed);
$task->complete();
var_dump($task->completed);



$task2 = new TaskToDo ('Wash my car!');




//    echo "This is a correct sentence " . $task2->description;

