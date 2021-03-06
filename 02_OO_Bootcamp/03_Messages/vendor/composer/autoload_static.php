<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit814eb274a4e14ea8a076a2869070bc45
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit814eb274a4e14ea8a076a2869070bc45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit814eb274a4e14ea8a076a2869070bc45::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
