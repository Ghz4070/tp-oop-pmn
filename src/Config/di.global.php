<?php
declare(strict_types=1);

use App\Controllers\SessionController;
use App\Interfaces\StudentsInterface;
use App\Repository\NullStudentsRepository;
use App\Repository\StudentsRepository;

return [
    'students' => function (array $container) {
        return [
            'studentClassOne' => [
                "Ilies",
                "Tarshini",
                "Mehdi",
                "Thomas",
            ],
            'studentClassTwo' => [
                "Thomas",
                "Darkmira",
                "PHP",
                "Symfony",
            ]
        ];
    },
    StudentsInterface::class => function (array $container) {
        return $container[StudentsRepository::class]($container);
    },
    StudentsRepository::class => function (array $container) {
//        $factory = $container['students'];
//        $students = $factory($container);
//        $studentsClassOne = $students['studentsClassOne'];
//        return new StudentsRepository($studentsClassOne);
        return new StudentsRepository($container['students']($container));
    },
    NullStudentsRepository::class => function () {
        return new NullStudentsRepository();
    },
    SessionController::class => function (array $container) {
        return new SessionController('DVO21.1', $container[StudentsInterface::class]($container));
    }
];
