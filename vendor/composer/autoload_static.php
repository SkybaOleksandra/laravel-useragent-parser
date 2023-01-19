<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0a6ab92f8cb03094010fc90b077b12e
{
    public static $files = array (
        'da5f6548f070d3d306f90eee42dd5de6' => __DIR__ . '/..' . '/donatj/phpuseragentparser/src/UserAgentParser.php',
    );

    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'donatj\\UserAgent\\' => 17,
        ),
        'L' => 
        array (
            'Laravel\\UseragentParser\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'donatj\\UserAgent\\' => 
        array (
            0 => __DIR__ . '/..' . '/donatj/phpuseragentparser/src/UserAgent',
        ),
        'Laravel\\UseragentParser\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0a6ab92f8cb03094010fc90b077b12e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0a6ab92f8cb03094010fc90b077b12e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0a6ab92f8cb03094010fc90b077b12e::$classMap;

        }, null, ClassLoader::class);
    }
}
