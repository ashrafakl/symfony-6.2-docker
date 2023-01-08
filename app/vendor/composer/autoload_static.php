<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit758d00ac389621cd93c4859754c20c04
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit758d00ac389621cd93c4859754c20c04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit758d00ac389621cd93c4859754c20c04::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit758d00ac389621cd93c4859754c20c04::$classMap;

        }, null, ClassLoader::class);
    }
}