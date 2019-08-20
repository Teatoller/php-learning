<?php
class Task
{

    public $description;

    public $completed = false;

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
    new Task('Learn PHP class OOP'),
    new Task('Meet the Sims-lead')
];

$tasks[1]->complete();

require 'index.view.php';
