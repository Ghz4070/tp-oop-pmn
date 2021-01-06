<?php
declare(strict_types=1);

namespace App\Interfaces;

interface StudentInterface
{
    public function studentFirstname(): string;

    public function studentLastname(): string;

    public function studentAge(): int;
}