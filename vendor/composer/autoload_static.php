<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09015bcbbb0dedc6c139e35e57606446
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
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09015bcbbb0dedc6c139e35e57606446::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09015bcbbb0dedc6c139e35e57606446::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09015bcbbb0dedc6c139e35e57606446::$classMap;

        }, null, ClassLoader::class);
    }
}
