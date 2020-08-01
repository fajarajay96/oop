<?php
require_once  'animal.php';

class Ape {
    public $yell = 'Auooo';

    public function __construct( $name ) 
    {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function yell() {
        return $this->yell;
    }
 
}
?>