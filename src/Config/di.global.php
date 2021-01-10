<?php
declare(strict_types=1);

namespace App\Config;

use App\Controllers\StudentsController;

return [
    StudentsController::class => function ($container) {
        return new StudentsController();
    }
];
