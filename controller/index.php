<?php

$donees = $app['database']->selectAll('donees');

require 'views/index.view.php';