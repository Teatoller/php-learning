<?php

$query = require 'bootstrap.php';

require 'Task.php';
require 'functions.php';

$tasks = $query->selectAll('todos');

// die(var_dump($tasks));

require 'index.view.php';
