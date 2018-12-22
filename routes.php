<?php


$router->get('', 'controller/index.php');
$router->get('about', 'controller/about.php');
$router->get('donate', 'controller/donate.php');

$router->post('names', 'controller/add-name.php');

