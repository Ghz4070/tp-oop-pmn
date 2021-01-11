<?php
declare(strict_types=1);

namespace App\Repository;

use App\Interfaces\StudentsInterface;

final class NullStudentsRepository implements StudentsInterface
{
    public function students(int $value): array
    {
        return [];
    }

    public function numberOfStudents(int $value): int
    {
        return 0;
    }
}
