<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51e4572613b92001c3c9f30c4fe6d9c3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/src/Controllers/UsersController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51e4572613b92001c3c9f30c4fe6d9c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51e4572613b92001c3c9f30c4fe6d9c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51e4572613b92001c3c9f30c4fe6d9c3::$classMap;

        }, null, ClassLoader::class);
    }
}