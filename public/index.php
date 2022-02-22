<?php

use router\router;

require '../vendor/autoload.php';

$router = new router($_GET['url']);
$router->show();