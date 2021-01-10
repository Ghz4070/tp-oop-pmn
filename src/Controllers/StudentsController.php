<?php
declare(strict_types=1);

namespace App\Controllers;

final class StudentsController
{
    public $students;

    public function __construct()
    {
        $this->students = ["Ilies", "Etienne", "Arthur", "Tarshini", "Mehdi", "Thomas", "Guillaume"];
    }

    public function studentsArray(): array
    {
        return $this->students;
    }
}
