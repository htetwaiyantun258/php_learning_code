<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bb4baf1ede02b3406573763dde65663
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bb4baf1ede02b3406573763dde65663::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bb4baf1ede02b3406573763dde65663::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bb4baf1ede02b3406573763dde65663::$classMap;

        }, null, ClassLoader::class);
    }
}
