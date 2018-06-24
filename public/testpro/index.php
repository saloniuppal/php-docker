<?php
/**
 * Created by PhpStorm.
 * User: saloni
 * Date: 2/21/18
 * Time: 9:52 PM
 */

require_once('connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
} else {
    $controller = 'pages';
    $action     = 'home';
}

require_once('views/layout.php');

?>