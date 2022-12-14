<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited674ae016c6a20565062804b89d1a42
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Staditek\\App\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Staditek\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Staditek\\App\\Controller\\HomeController' => __DIR__ . '/../..' . '/App/Controller/HomeController.php',
        'Staditek\\App\\Core\\Akun' => __DIR__ . '/../..' . '/App/Core/Akun.php',
        'Staditek\\App\\Core\\Database' => __DIR__ . '/../..' . '/App/Core/Database.php',
        'Staditek\\App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'Staditek\\App\\Core\\View' => __DIR__ . '/../..' . '/App/Core/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited674ae016c6a20565062804b89d1a42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited674ae016c6a20565062804b89d1a42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited674ae016c6a20565062804b89d1a42::$classMap;

        }, null, ClassLoader::class);
    }
}
