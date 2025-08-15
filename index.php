<?php

require __DIR__ . '/vendor/autoload.php';

spl_autoload_register( 'src_autoloader' );

function src_autoloader ( string $class ): void
{

    $classPath = str_replace( '\\', '/', $class );

    $file = __DIR__ . '/src/' . $classPath . '.php';

    if ( file_exists( $file ) )
    {
        require $file;
    }
}

require __DIR__ . '/src/Main.php';
