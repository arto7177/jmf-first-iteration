<?php

$app['database']->insert('donees', [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'email' => $_POST['email']
]);


header('Location: /');