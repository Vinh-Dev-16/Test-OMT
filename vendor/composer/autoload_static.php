<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8107f92670af32d95a3e3a6ac7fe47c6
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thinkpad\\Omt\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thinkpad\\Omt\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8107f92670af32d95a3e3a6ac7fe47c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8107f92670af32d95a3e3a6ac7fe47c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8107f92670af32d95a3e3a6ac7fe47c6::$classMap;

        }, null, ClassLoader::class);
    }
}