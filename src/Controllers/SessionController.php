<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\AbstractControllers\AbstractStudent;

final class SessionController extends AbstractStudent
{
    public $name;

    public function __construct(string $name)
    {
        parent::__construct();
        $this->name = $name;
    }

    public function displaySession()
    {
        printf("session en cours : %s Il y a %d eleves <br><br>\n",
            $this->name, $this->numberOfStudents());
    }

    public function classement()
    {
        $average = array();
        for ($i = 0; $i < $this->numberOfStudents(); $i++) {
            $average += array($this->students()[$i] => $this->averageStudent());
        }
        asort($average);

        foreach ($average as $name => $avg) {
            printf("%s a %.1f de moyenne <br>\n", $name, $avg);
        }
    }
}