<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f0839ed5d1e28e61b7a420423e3cb38
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'b067bc7112e384b61c701452d53a14a8' => __DIR__ . '/..' . '/mtdowling/jmespath.php/src/JmesPath.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '8a9dc1de0ca7e01f3e08231539562f61' => __DIR__ . '/..' . '/aws/aws-sdk-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'ULogin\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'J' => 
        array (
            'JmesPath\\' => 9,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'Aws\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ULogin\\' => 
        array (
            0 => __DIR__ . '/..' . '/stanislav-web/phalcon-ulogin/src/ULogin',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'JmesPath\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtdowling/jmespath.php/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Aws\\' => 
        array (
            0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Hybridauth' => 
            array (
                0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
            ),
        ),
    );

    public static $classMap = array (
        'Test\\ULogin\\AuthTest' => __DIR__ . '/..' . '/stanislav-web/phalcon-ulogin/phpunit/src/ULogin/AuthTest.php',
        'Test\\ULogin\\InitTest' => __DIR__ . '/..' . '/stanislav-web/phalcon-ulogin/phpunit/src/ULogin/InitTest.php',
        'Test\\ULogin\\ParserTest' => __DIR__ . '/..' . '/stanislav-web/phalcon-ulogin/phpunit/src/ULogin/ParserTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f0839ed5d1e28e61b7a420423e3cb38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f0839ed5d1e28e61b7a420423e3cb38::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3f0839ed5d1e28e61b7a420423e3cb38::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3f0839ed5d1e28e61b7a420423e3cb38::$classMap;

        }, null, ClassLoader::class);
    }
}
