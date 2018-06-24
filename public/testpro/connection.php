<?php
/**
 * Created by PhpStorm.
 * User: saloni
 * Date: 2/21/18
 * Time: 9:57 PM
 */

class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=smarty-mysql;dbname=php_mvc', 'root', 'smarty', $pdo_options);
        }
        return self::$instance;
    }
}

?>