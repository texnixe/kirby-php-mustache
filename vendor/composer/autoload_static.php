<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50ef5af5e58a1b6f2cfd5804c0206c16
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
    );

    public static $classMap = array (
        'Mustache_Autoloader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Autoloader.php',
        'Mustache_Cache' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Cache.php',
        'Mustache_Cache_AbstractCache' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Cache/AbstractCache.php',
        'Mustache_Cache_FilesystemCache' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Cache/FilesystemCache.php',
        'Mustache_Cache_NoopCache' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Cache/NoopCache.php',
        'Mustache_Compiler' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Compiler.php',
        'Mustache_Context' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Context.php',
        'Mustache_Engine' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Engine.php',
        'Mustache_Exception' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception.php',
        'Mustache_Exception_InvalidArgumentException' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception/InvalidArgumentException.php',
        'Mustache_Exception_LogicException' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception/LogicException.php',
        'Mustache_Exception_RuntimeException' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception/RuntimeException.php',
        'Mustache_Exception_SyntaxException' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception/SyntaxException.php',
        'Mustache_Exception_UnknownFilterException' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception/UnknownFilterException.php',
        'Mustache_Exception_UnknownHelperException' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception/UnknownHelperException.php',
        'Mustache_Exception_UnknownTemplateException' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Exception/UnknownTemplateException.php',
        'Mustache_HelperCollection' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/HelperCollection.php',
        'Mustache_LambdaHelper' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/LambdaHelper.php',
        'Mustache_Loader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader.php',
        'Mustache_Loader_ArrayLoader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader/ArrayLoader.php',
        'Mustache_Loader_CascadingLoader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader/CascadingLoader.php',
        'Mustache_Loader_FilesystemLoader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader/FilesystemLoader.php',
        'Mustache_Loader_InlineLoader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader/InlineLoader.php',
        'Mustache_Loader_MutableLoader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader/MutableLoader.php',
        'Mustache_Loader_ProductionFilesystemLoader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader/ProductionFilesystemLoader.php',
        'Mustache_Loader_StringLoader' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Loader/StringLoader.php',
        'Mustache_Logger' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Logger.php',
        'Mustache_Logger_AbstractLogger' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Logger/AbstractLogger.php',
        'Mustache_Logger_StreamLogger' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Logger/StreamLogger.php',
        'Mustache_Parser' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Parser.php',
        'Mustache_Source' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Source.php',
        'Mustache_Source_FilesystemSource' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Source/FilesystemSource.php',
        'Mustache_Template' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Template.php',
        'Mustache_Tokenizer' => __DIR__ . '/..' . '/mustache/mustache/src/Mustache/Tokenizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit50ef5af5e58a1b6f2cfd5804c0206c16::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit50ef5af5e58a1b6f2cfd5804c0206c16::$classMap;

        }, null, ClassLoader::class);
    }
}
