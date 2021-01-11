<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$container = require __DIR__ . '/src/Config/di.global.php';

use App\Controllers\SessionController;


$displayClass = $container[SessionController::class]($container);

$displayClass->displaySession((int)$_GET['class']);
$displayClass->classement((int)$_GET['class']);

echo '<br>';
