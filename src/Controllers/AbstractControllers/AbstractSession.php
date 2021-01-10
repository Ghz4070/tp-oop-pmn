<?php
declare(strict_types=1);

namespace App\Controllers\AbstractControllers;

use App\Controllers\StudentsController;
use App\Interfaces\AverageInterface;
use App\Interfaces\ClassementInterface;

abstract class AbstractSession implements AverageInterface, ClassementInterface
{
    protected $students;

    public function __construct(array $students)
    {
        $this->students = new StudentsController($students);
    }

    public function averageStudent(): float
    {
        return round(rand(0, 200) / 10, 2);
    }

    abstract public function classement(): void;
}
