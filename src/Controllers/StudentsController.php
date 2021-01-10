<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Interfaces\StudentsInterface;

final class StudentsController implements StudentsInterface
{
    public $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function students(): array
    {
        return $this->students;
    }

    public function numberOfStudents(): int
    {
        return count($this->students());
    }
}
