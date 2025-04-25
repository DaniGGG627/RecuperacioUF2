<?php
class Database {
    private static $db;

    public static function connect() {
        if (!self::$db) {
            self::$db = new PDO('sqlite:biblioteca.sqlite');
        }
        return self::$db;
    }
}
