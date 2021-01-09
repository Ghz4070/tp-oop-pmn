<?php
declare(strict_types=1);

namespace App\Config;

class Content
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
