<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c8937caf92912f7f66490e58cb83028
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c8937caf92912f7f66490e58cb83028::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c8937caf92912f7f66490e58cb83028::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c8937caf92912f7f66490e58cb83028::$classMap;

        }, null, ClassLoader::class);
    }
}