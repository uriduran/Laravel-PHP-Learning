<?php

class Task
{
    public $description; //public means anyone can access outside of class

    public $completed = false;

    public function __construct($description)//this is a method, function inside a class
    {
        $this->description = $description; //take $desciption and assign it to the description property
        //$this refers to this instance inside the class.
        //construct is called immediately when the class is called.
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP'); //creates new instance, passes this into the $description up top.
$task2 = new Task('Do not Learn');

var_dump($task->completed);
var_dump($task->description);

var_dump($task);
var_dump($task2);
