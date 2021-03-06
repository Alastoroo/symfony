<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ddf9db3960cc022bd3ff39dfa511c7f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extensions\\' => 16,
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/extensions/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ddf9db3960cc022bd3ff39dfa511c7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ddf9db3960cc022bd3ff39dfa511c7f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2ddf9db3960cc022bd3ff39dfa511c7f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
