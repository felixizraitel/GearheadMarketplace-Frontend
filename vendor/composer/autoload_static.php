<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit407fdc130521736779e2a0890147dc69
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit407fdc130521736779e2a0890147dc69::$classMap;

        }, null, ClassLoader::class);
    }
}
