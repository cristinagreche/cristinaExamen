<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a549bafc794d01843dae5b6978251fc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SujalPatel\\IntToEnglish\\' => 24,
        ),
        'B' => 
        array (
            'Ballen\\Distical\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SujalPatel\\IntToEnglish\\' => 
        array (
            0 => __DIR__ . '/..' . '/sujalpatel/inttoenglish/src',
        ),
        'Ballen\\Distical\\' => 
        array (
            0 => __DIR__ . '/..' . '/ballen/distical/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a549bafc794d01843dae5b6978251fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a549bafc794d01843dae5b6978251fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a549bafc794d01843dae5b6978251fc::$classMap;

        }, null, ClassLoader::class);
    }
}
