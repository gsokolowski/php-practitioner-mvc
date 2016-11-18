<?php

namespace App\Core;

// This is DI Container i was called App before earlier
// but I have changed name to make sure I don't have collision with App

class DI {

    protected static $DIregistry = [];

    public static function bind($key, $value) {

        // save key value in to DI registery
        static::$DIregistry[$key] = $value;
    }


    public static function get($key) {

        if(! array_key_exists($key, static::$DIregistry)) {

            throw new Exception("No key {$key} in DI container");
        }
        return static::$DIregistry[$key];
    }
}