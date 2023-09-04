<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5afe4b1b92e0c0d0e46130efa5ac4abd
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controller\\CoursesController\\CoursesController' => __DIR__ . '/../..' . '/App/Controller/CoursesController.php',
        'App\\Controller\\PageController' => __DIR__ . '/../..' . '/App/Controller/PageController.php',
        'App\\Models\\Courses\\Courses' => __DIR__ . '/../..' . '/App/Models/Courses.php',
        'Bramus\\Router\\Router' => __DIR__ . '/..' . '/bramus/router/src/Bramus/Router/Router.php',
        'ComposerAutoloaderInit5afe4b1b92e0c0d0e46130efa5ac4abd' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit5afe4b1b92e0c0d0e46130efa5ac4abd' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\Helper' => __DIR__ . '/../..' . '/Core/Helper.php',
        'Handler' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'Hello\\HelloRouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'MultilangRouter' => __DIR__ . '/..' . '/bramus/router/demo-multilang/index.php',
        'RouterTest' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'RouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5afe4b1b92e0c0d0e46130efa5ac4abd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5afe4b1b92e0c0d0e46130efa5ac4abd::$classMap;

        }, null, ClassLoader::class);
    }
}