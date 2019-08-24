<?php

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    public function store()
    {
        // insert user associated with
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        // redirect back to all users
        return redireect('users');
    }
}
