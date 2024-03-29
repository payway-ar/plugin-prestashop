<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31002a715a4b056c78eb1e0e50ab5ba7
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Decidir\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Decidir\\' => 
        array (
            0 => __DIR__ . '/..' . '/decidir2/php-sdk/Decidir/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31002a715a4b056c78eb1e0e50ab5ba7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31002a715a4b056c78eb1e0e50ab5ba7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31002a715a4b056c78eb1e0e50ab5ba7::$classMap;

        }, null, ClassLoader::class);
    }
}
