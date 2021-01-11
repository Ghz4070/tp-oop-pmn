<?php
declare(strict_types=1);

namespace App\Controllers\AbstractControllers;

use App\Interfaces\AverageInterface;
use App\Interfaces\ClassementInterface;
use App\Interfaces\StudentsInterface;

abstract class AbstractSession implements AverageInterface, ClassementInterface
{
    protected $students;

    public function __construct(StudentsInterface $students)
    {
        $this->students = $students;
    }

    public function averageStudent(): float
    {
        return round(rand(0, 200) / 10, 2);
    }

    abstract public function classement(): void;
}
