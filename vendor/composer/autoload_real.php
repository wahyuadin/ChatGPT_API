<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderIniteed5fc0f8d83e786380fac54dcbef4e8
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

        spl_autoload_register(array('ComposerAutoloaderIniteed5fc0f8d83e786380fac54dcbef4e8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderIniteed5fc0f8d83e786380fac54dcbef4e8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticIniteed5fc0f8d83e786380fac54dcbef4e8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}