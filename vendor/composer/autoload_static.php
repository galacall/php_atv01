<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit204eb2779d12185802a38252b11ddd16
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit204eb2779d12185802a38252b11ddd16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit204eb2779d12185802a38252b11ddd16::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit204eb2779d12185802a38252b11ddd16::$classMap;

        }, null, ClassLoader::class);
    }
}
