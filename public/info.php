<?php
/**
 * Created by PhpStorm.
 * User: saloni
 * Date: 2/1/18
 * Time: 12:23 AM
 */

//echo "Hello Pakodeloni";

//phpinfo();


class Family {

    private $members;
    private $cast;

    public function __construct()
    {
        $this->cast = "Uppal";
        $this->members = 6;

    }

    public function __toString()
    {
     return "Saloni is beautiful";

    }

    public function __debugInfo()
    {
        return [
            'propSquared' => 'saloni'
        ];
    }

    public function __set_state(array $array)
    {

        $temp = new Family();
        $temp->members = $array['members'];
        $temp->cast = "Our Family name is : " . $array['cast'];
        return $temp;

    }

    public function __invoke()
    {
        echo "I can act now as a function";
        // TODO: Implement __invoke() method.
    }




}

$obj = new Family();
//$code = var_export($obj, true);
//eval($code . ";");
//$obj();

?>


