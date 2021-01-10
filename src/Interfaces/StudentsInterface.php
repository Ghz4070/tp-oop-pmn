<?php
declare(strict_types=1);

namespace App\Interfaces;

interface StudentsInterface
{
    public function students(): array;

    public function numberOfStudents(): int;
}
