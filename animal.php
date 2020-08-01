<?php

class Animal {
  public $legs= 2;
  public $cold_blooded = false;
  public function __construct($name) 
  {
    $this->name= $name;
  }

  function set_legs($cc){
    $this->legs = $cc;
  }

  function get_name(){
    return $this->name;
  }

  function get_legs(){
    return $this->legs;
  }
  
  function get_cold_blooded(){
    return $this->cold_blooded;
  }

  
}

// $xeniya = new Animal("Shaun");

// echo $xeniya->get_name(); // Xeniya
// echo "<br>".$xeniya->legs;
// echo "<br>".$xeniya->cold_blooded;
?>