<?php

class Request
{
    public static function uri()
    {
        // return trim($_SERVER['REQUEST_URI'],'/');
        // parse_url ( string $url [, int $component = -1 ] ) : mixed
        // /names?name=Nigel

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
