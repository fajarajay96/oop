<?php
// require  "animal.php";
require  "Frog.php";
require  "Ape.php";

$sheep = new Animal("shaun");

echo $sheep->get_name(); // "shaun"
// echo $sheep->set_legs(10);
echo "<br>kaki : ".$sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false

$kodok = new Frog("buduk");
echo "<br>".$kodok->get_name();
$sheep->set_legs(4);
echo "<br>kaki : ".$sheep->get_legs(); // 2
echo "<br>".$kodok->jump() ; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "<br>".$sungokong->get_name();
$sheep->set_legs(4);
echo "<br>kaki : ".$sheep->get_legs(); // 2
echo "<br>".$sungokong->yell() // "Auooo"

?>