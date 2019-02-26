<?php
/**
 * Created by IntelliJ IDEA.
 * User: saloni
 * Date: 2019-02-21
 * Time: 13:28
 */

final class baseclass
{
    public function  mymethod()
    {
        echo "my baseclasss";
    }


}

class derivedclass extends baseclass {

    public function mymethod() {

        echo   "derivedclass method";

    }
}


$c= new derivedclass();
$c->mymethod();

interface myItems
{


}

pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

