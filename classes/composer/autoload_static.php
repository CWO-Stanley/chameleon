<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d9ca66e738c708a60d451571b356822
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d9ca66e738c708a60d451571b356822::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d9ca66e738c708a60d451571b356822::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
