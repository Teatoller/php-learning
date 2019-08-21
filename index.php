<?php

$database = require 'core/bootstrap.php';

$tasks = $database->selectAll('todos');

require 'views/index.view.php';
