<?php

require 'Task.php';
require 'functions.php';
require 'database/connection.php';

// $pdo = connectToDb();
$pdo = Connection::make();


$tasks = fetchAllTasks($pdo);

require 'index.view.php';
