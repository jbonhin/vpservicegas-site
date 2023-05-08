<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite085403bb9f30ff2a21476d7c09ee3fd
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

        spl_autoload_register(array('ComposerAutoloaderInite085403bb9f30ff2a21476d7c09ee3fd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite085403bb9f30ff2a21476d7c09ee3fd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite085403bb9f30ff2a21476d7c09ee3fd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}