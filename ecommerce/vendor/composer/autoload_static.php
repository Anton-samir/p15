<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7df17731e21ce9792882ffa1c064b05
{
    public static $files = array (
        '86f5268ce22a86dc1f587867cfbc56f1' => __DIR__ . '/../..' . '/app/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita7df17731e21ce9792882ffa1c064b05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7df17731e21ce9792882ffa1c064b05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7df17731e21ce9792882ffa1c064b05::$classMap;

        }, null, ClassLoader::class);
    }
}