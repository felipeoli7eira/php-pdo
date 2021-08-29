<?php

namespace app\classes;

class Route
{
    public static function load(string $uri, array $routes): string
    {
        if ( !array_key_exists($uri, $routes)  ) {

            throw new \Exception('Recurso não encontrado');
        }

        return __DIR__ . "/../{$routes[$uri]}";
    }
}