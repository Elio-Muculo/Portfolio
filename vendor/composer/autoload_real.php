<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit75892ec5203f837fad0964d5bdea1de7
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit75892ec5203f837fad0964d5bdea1de7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit75892ec5203f837fad0964d5bdea1de7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit75892ec5203f837fad0964d5bdea1de7::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
