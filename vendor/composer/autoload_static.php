<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f4e1f3f08d5de21c1487d3e540aa787
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lara\\Installer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lara\\Installer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f4e1f3f08d5de21c1487d3e540aa787::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f4e1f3f08d5de21c1487d3e540aa787::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f4e1f3f08d5de21c1487d3e540aa787::$classMap;

        }, null, ClassLoader::class);
    }
}