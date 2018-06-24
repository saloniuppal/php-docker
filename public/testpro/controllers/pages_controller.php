<?php
/**
 * Created by PhpStorm.
 * User: saloni
 * Date: 2/21/18
 * Time: 10:02 PM
 */

class PagesController {
    public function home() {
        $first_name = 'Jon';
        $last_name  = 'Snow';
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
}

?>