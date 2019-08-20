<?php

require 'functions.php';
class Task
{

    protected $description;

    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Learn PHP class oop'),
    new Task('Meet the Sims-lead')
];
// $task = new Task('Go to the store');

// $task->complete();

// var_dump($task->isComplete());

dd($tasks);


require 'index.view.php';
?>
