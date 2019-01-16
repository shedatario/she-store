<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit683402bc1ee46e99b3eff09d061df0ce
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit683402bc1ee46e99b3eff09d061df0ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit683402bc1ee46e99b3eff09d061df0ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}