<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita348a2a9441a8980890bbab37dcd7829
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eclair\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eclair\\' => 
        array (
            0 => __DIR__ . '/..' . '/developjkong/eclair/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita348a2a9441a8980890bbab37dcd7829::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita348a2a9441a8980890bbab37dcd7829::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita348a2a9441a8980890bbab37dcd7829::$classMap;

        }, null, ClassLoader::class);
    }
}
