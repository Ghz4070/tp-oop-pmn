<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\SessionController;

$displayClass = new SessionController('DVO21.1');
$displayClass->displaySession();
$displayClass->classement();
