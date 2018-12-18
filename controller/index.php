<?php

$donees = $query->selectAll('donees');

require 'views/index.view.php';