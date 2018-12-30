<?php


$router->get('', 'controller/index.php');
$router->get('about', 'controller/about.php');
$router->get('donate', 'controller/donate.php');
$router->get('thankyou', 'controller/thankyou.php');
$router->get('paypal', 'controller/donate-paypal.php');

$router->post('names', 'controller/add-name.php');

