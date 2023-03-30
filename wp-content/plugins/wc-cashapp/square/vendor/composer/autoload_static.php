<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3afeb16d09f30ae98be710ac1196a64
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Square\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Square\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3afeb16d09f30ae98be710ac1196a64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3afeb16d09f30ae98be710ac1196a64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3afeb16d09f30ae98be710ac1196a64::$classMap;

        }, null, ClassLoader::class);
    }
}