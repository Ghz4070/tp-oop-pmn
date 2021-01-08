<?php
declare(strict_types=1);

namespace App\Controllers\AbstractControllers;

use App\Interfaces\StudentInterface;

abstract class AbstractStudent implements StudentInterface
{
    protected $age;
    protected $lastname;
    protected $firstname;
    protected $average;

    public function __construct(int $age, string $firstname, string $lastname)
    {
        $this->average = rand(40, 500);
        $this->age = $age;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function studentLastname(): string
    {
        return $this->lastname;
    }

    public function studentFirstname(): string
    {
        return $this->firstname;
    }

    public function studentAge(): int
    {
        return $this->age;
    }

    public function studentAverage(): float
    {
        return $this->average;
    }

}