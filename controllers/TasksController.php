<?php

namespace App\Controllers;

use App\Core\App;

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('tasks', compact('tasks'));
    }

    public function store()
    {
        // insert task associated with
        App::get('database')->insert('todos', [
            'description' => $_POST['description'],
            'completed' => $_POST['completed'],
        ]);

        // redirect back to all users
        return redireect('tasks');
    }
}
