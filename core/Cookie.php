<?php

namespace core;

class Cookie
{
    public static function set($key, $value, $time = -1 )
    {
        setcookie($key, $value, $time, '/', 'ksa-test-traffic.loc');
    }

    public static function get($key)
    {
        return $_COOKIE[$key];
    }
}