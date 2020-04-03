<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf75020ed79faa2e57d7d0d4e42a3324b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Com\\Tecnick\\Color\\' => 18,
            'Com\\Tecnick\\Barcode\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Com\\Tecnick\\Color\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-color/src',
        ),
        'Com\\Tecnick\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-barcode/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf75020ed79faa2e57d7d0d4e42a3324b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf75020ed79faa2e57d7d0d4e42a3324b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
