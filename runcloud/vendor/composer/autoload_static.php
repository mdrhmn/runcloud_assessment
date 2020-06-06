<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d1c6dfe3b4d0b92d9315090052369ef
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RunCloud\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RunCloud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d1c6dfe3b4d0b92d9315090052369ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d1c6dfe3b4d0b92d9315090052369ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
