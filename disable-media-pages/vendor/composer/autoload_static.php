<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04671f280aada7196646eb7bb7269f25
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NPX\\DisableMediaPages\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NPX\\DisableMediaPages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'NPX\\DisableMediaPages\\Modules\\Admin' => __DIR__ . '/../..' . '/lib/Modules/Admin.php',
        'NPX\\DisableMediaPages\\Modules\\CLI' => __DIR__ . '/../..' . '/lib/Modules/CLI.php',
        'NPX\\DisableMediaPages\\Modules\\Mangle' => __DIR__ . '/../..' . '/lib/Modules/Mangle.php',
        'NPX\\DisableMediaPages\\Modules\\REST' => __DIR__ . '/../..' . '/lib/Modules/REST.php',
        'NPX\\DisableMediaPages\\Modules\\Restore' => __DIR__ . '/../..' . '/lib/Modules/Restore.php',
        'NPX\\DisableMediaPages\\Plugin' => __DIR__ . '/../..' . '/lib/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04671f280aada7196646eb7bb7269f25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04671f280aada7196646eb7bb7269f25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04671f280aada7196646eb7bb7269f25::$classMap;

        }, null, ClassLoader::class);
    }
}
