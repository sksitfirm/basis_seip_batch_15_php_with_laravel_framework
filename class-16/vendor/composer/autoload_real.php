<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitacfd583b040ce794bafd5d6dcbb9f2b8
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

        spl_autoload_register(array('ComposerAutoloaderInitacfd583b040ce794bafd5d6dcbb9f2b8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitacfd583b040ce794bafd5d6dcbb9f2b8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitacfd583b040ce794bafd5d6dcbb9f2b8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
