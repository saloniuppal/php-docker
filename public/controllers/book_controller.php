<?php
include_once("models/books.php");
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'views/templates_cache',
));

$template = $twig->load('index.html');
echo $template->render(array('the' => 'variables', 'go' => 'here'));

/**
 * Created by PhpStorm.
 * User: saloni
 * Date: 7/19/18
 * Time: 4:01 PM
 */

class Controller
{
    public $mod;

    public function __construct()
    {
        $this->mod = new Model();
    }

    public function display()
    {
        $allBooks = $this->mod->allBooks();
        include_once "views/view_books.php";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

}


