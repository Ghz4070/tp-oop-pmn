<?php
declare(strict_types=1);

namespace App\Repository;

use App\Interfaces\StudentsInterface;

final class StudentsRepository implements StudentsInterface
{
    public $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function students(int $value): array
    {
        return array_values($this->students)[$value];
    }

    public function numberOfStudents(int $value): int
    {
        return count($this->students($value));
    }
}
