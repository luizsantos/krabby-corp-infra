<?php
/**
 * Database Configuration Prototype
 * Copy this file to database.php and configure local credentials.
 */

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_NAME', 'kes_enterprise_db');

// Placeholders for environment variables
define('DB_USER', getenv('APP_DB_USER') ?: 'db_app_user');
define('DB_PASS', getenv('APP_DB_PASS') ?: 'change_this_password_in_prod');

function getDatabaseConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new PDO($dsn, DB_USER, DB_PASS, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}