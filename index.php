<?php

require 'Task.php';
require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// $pdo = connectToDb();
$pdo = Connection::make();


$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('todos');

require 'index.view.php';
