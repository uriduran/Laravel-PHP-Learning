<?php

class Task {//An instance of a class is an object.

    //defining properties. Protected cannot be called from outside.
    public $description;
    public $completed = false;

    //method if its inside a class otherwise called a function
    public function __construct($description) //triggered automatically when "new Task()" is called.
    { 

        $this->description = $description;
    }

        public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}


$tasks = [ //Creates array of tasks and submits them to Task Class

    new Task('Go to the store'),
    new Task('Go to the store2'),
    new Task('Go to the store3')

];

$tasks[0]->complete();

var_dump($tasks);

// $task = new Task('Go to the store'); //New task creation

// $task->complete();

// var_dump($task->isComplete()); // check if its complete
require 'view.index.php';






