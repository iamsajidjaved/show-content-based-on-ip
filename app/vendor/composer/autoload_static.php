<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit488a8a69d23f3d56e43bea27ec32f078
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaxMind\\Db\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit488a8a69d23f3d56e43bea27ec32f078::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit488a8a69d23f3d56e43bea27ec32f078::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit488a8a69d23f3d56e43bea27ec32f078::$classMap;

        }, null, ClassLoader::class);
    }
}
