<?php

/**
 * DB class using the standard PHP PDO extension.
 *
 * Class DB
 */
class DB
{
    /**
     * @var PDO|null - PDO connection instance
     */
	private static $instance;

	private const DB_HOST = 'localhost';
	private const DB_NAME = 'databaseName';
	private const DB_USER = 'root';
	private const DB_PASS = '';

	private function __construct () {}
	private function __clone () {}

    /**
     * Get DB connection
     *
     * @return DB|null
     */
	public static function connection(): ? PDO
    {
        if (empty(self::$instance)) {
            self::$instance = new PDO(('mysql:host=' . self::DB_HOST .';dbname=' . self::DB_NAME), self::DB_USER, self::DB_PASS);
        }
        return self::$instance;
    }
}