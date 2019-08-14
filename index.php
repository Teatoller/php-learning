<?php
$person = [
    'age' => 24,
    'hair' => 'black',
    'career' => 'software developer'
];

$person['name'] = 'steven';

var_dump($person);

unset($person['hair']);

// die(var_dump($person));

require 'index.view.php';
