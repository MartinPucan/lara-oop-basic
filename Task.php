<?php
//declare(strict_types = 1);

class Task {
	public $description = 'Go to the store';

	public function __construct()
	{
		$description = $this->description;
		var_dump("Go ahead");
	}


}

$task = new Task();


echo "<pre>";
var_dump($task->$description);
echo "</pre>";
