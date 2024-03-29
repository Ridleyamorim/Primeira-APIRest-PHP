<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70005a55435876f08c03c7efdd8680c6
{
    public static $files = array (
        '56d7b111e239fe09a3d31b7b49f0da0e' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70005a55435876f08c03c7efdd8680c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70005a55435876f08c03c7efdd8680c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70005a55435876f08c03c7efdd8680c6::$classMap;

        }, null, ClassLoader::class);
    }
}
