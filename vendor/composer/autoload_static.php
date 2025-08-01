<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38a666be98c1b28a8323380fcb2a7d14
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38a666be98c1b28a8323380fcb2a7d14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38a666be98c1b28a8323380fcb2a7d14::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38a666be98c1b28a8323380fcb2a7d14::$classMap;

        }, null, ClassLoader::class);
    }
}
