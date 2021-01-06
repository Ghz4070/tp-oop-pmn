<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\AbstractControllers\AbstractStudent;

class StudentController extends AbstractStudent
{
    public function __construct(int $age, string $firstname, string $lastname)
    {
        parent::__construct($age, $firstname, $lastname);
    }
}