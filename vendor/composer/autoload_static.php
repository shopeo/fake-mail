<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23c95740cdcbb2845ff3e2d975cd8cc1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shopeo\\FakeMail\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shopeo\\FakeMail\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit23c95740cdcbb2845ff3e2d975cd8cc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23c95740cdcbb2845ff3e2d975cd8cc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23c95740cdcbb2845ff3e2d975cd8cc1::$classMap;

        }, null, ClassLoader::class);
    }
}
