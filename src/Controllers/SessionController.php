<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\AbstractControllers\AbstractSession;

class SessionController extends AbstractSession
{
    public $name;

    public function __construct(string $name, array $students)
    {
        parent::__construct($students);
        $this->name = $name;
    }

    public function displaySession()
    {
        printf(
            "session en cours : %s Il y a %d eleves <br><br>\n",
            $this->name,
            $this->students->numberOfStudents()
        );
    }

    public function classement(): void
    {
        $average = array();
        $increment = 1;

        for ($incr = 0; $incr < $this->students->numberOfStudents(); $incr++) {
            $average += array($this->students->students()[$incr] => $this->averageStudent());
        }
        asort($average);

        foreach ($average as $name => $avg) {
            printf("%d - %s a %.1f de moyenne <br>\n", $increment++, $name, $avg);
        }
    }
}
