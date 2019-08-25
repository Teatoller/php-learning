<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);
    return require "views/{$name}.view.php";
}

function redireect($path)
{
    // redirect back to all users/todos
    
    header("Location: /{$path}");
}
