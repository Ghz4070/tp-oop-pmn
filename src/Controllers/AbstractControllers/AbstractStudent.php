<?php
declare(strict_types=1);

namespace App\Controllers\AbstractControllers;

use App\Config\Content;
use App\Interfaces\AverageInterface;
use App\Interfaces\StudentInterface;

abstract class AbstractStudent implements AverageInterface, StudentInterface
{
    protected $students;

    public function __construct()
    {
        $this->students = new Content();
    }

    public function averageStudent(): float
    {
        return round(rand(0, 200) / 10, 2);
    }

    public function numberOfStudents(): int
    {
        return count($this->students->studentsArray());
    }

    public function students(): array
    {
        return $this->students->studentsArray();
    }

    abstract public function classement();
}