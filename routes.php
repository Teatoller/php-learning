<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about/software' => 'controllers/about-software.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/add-name.php'
// ]);

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/software', 'controllers/about-software.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');


// var_dump($router->routes);
