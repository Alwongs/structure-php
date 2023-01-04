<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb483e04f3396f285bfd47d8ada7db1f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb483e04f3396f285bfd47d8ada7db1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb483e04f3396f285bfd47d8ada7db1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb483e04f3396f285bfd47d8ada7db1f::$classMap;

        }, null, ClassLoader::class);
    }
}
