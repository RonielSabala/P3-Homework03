<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit38a666be98c1b28a8323380fcb2a7d14
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit38a666be98c1b28a8323380fcb2a7d14', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit38a666be98c1b28a8323380fcb2a7d14', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit38a666be98c1b28a8323380fcb2a7d14::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
