<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit909256a68d7f6c7e272a0d45795ba7f0
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
            0 => __DIR__ . '/../..' . '/inote',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit909256a68d7f6c7e272a0d45795ba7f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit909256a68d7f6c7e272a0d45795ba7f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit909256a68d7f6c7e272a0d45795ba7f0::$classMap;

        }, null, ClassLoader::class);
    }
}
