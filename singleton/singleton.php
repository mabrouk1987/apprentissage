<?php

class Singleton
{
    private static $_instance = null;
    
    private function __construct()
    {
    }
    
    public static function getInstance()
    {
        if(is_null(static::$_instance)){
            static::$_instance = new Singleton();
        }
        return static::$_instance;
    }
}