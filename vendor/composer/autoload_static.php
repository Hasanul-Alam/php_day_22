<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit675abd274ab0c1bec4e7381b4a0042aa
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit675abd274ab0c1bec4e7381b4a0042aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit675abd274ab0c1bec4e7381b4a0042aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit675abd274ab0c1bec4e7381b4a0042aa::$classMap;

        }, null, ClassLoader::class);
    }
}