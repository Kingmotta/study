<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6d3ae2ccd3ff5c852d88a985b6dd175
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6d3ae2ccd3ff5c852d88a985b6dd175::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6d3ae2ccd3ff5c852d88a985b6dd175::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
