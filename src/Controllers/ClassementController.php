<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Interfaces\StudentInterface;

final class ClassementController

{
    private $students = [];

    public function __construct(StudentInterface ...$students)
    {
        $this->students = $students;
    }

    public function createClassement()
    {
        echo "Voici le classement de la classe METTRE_LA_CLASSE_METHOD<br>\n";

        foreach ($this->students as $student) {
            echo get_class($student) . ' : ' . $student->student() . "<br>\n";
        }
    }
}