<?php
require_once  "animal.php";

class Frog{
    public $jump = "hop hop";  
    public function __construct($name) 
  {
    $this->name= $name;
  }
    function jump(){
        return $this->jump;
    }

    function get_name(){
        return $this->name;
      }

}
?>