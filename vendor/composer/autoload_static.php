<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1d6252046aaf86d49124a99fa2ca164
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1d6252046aaf86d49124a99fa2ca164::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1d6252046aaf86d49124a99fa2ca164::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
