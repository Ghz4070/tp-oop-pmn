<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\SessionController;

$students = [
    "Ilies",
    "Tarshini",
    "Mehdi",
    "Thomas",
    "Guillaume",
    "Maxime",
    "Rubens",
    "Ahmed",
];

$displayClass = new SessionController('DVO21.1', $students);

$displayClass->displaySession();
$displayClass->classement();
