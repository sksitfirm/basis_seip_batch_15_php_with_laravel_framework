<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcc0badf8a32c9d6811ddd83bce3216cd
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

        spl_autoload_register(array('ComposerAutoloaderInitcc0badf8a32c9d6811ddd83bce3216cd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcc0badf8a32c9d6811ddd83bce3216cd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcc0badf8a32c9d6811ddd83bce3216cd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}