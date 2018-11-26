<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5337e0d389adf75e4b33e4348a5b38d3
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FacebookAds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FacebookAds\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-business-sdk/src/FacebookAds',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5337e0d389adf75e4b33e4348a5b38d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5337e0d389adf75e4b33e4348a5b38d3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}