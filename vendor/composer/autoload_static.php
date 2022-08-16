<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc66a91c75e67f56601ed16e19207042
{
    public static $classMap = array (
        'Author' => __DIR__ . '/../..' . '/classes/Author.php',
        'Book' => __DIR__ . '/../..' . '/classes/Book.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcc66a91c75e67f56601ed16e19207042::$classMap;

        }, null, ClassLoader::class);
    }
}
