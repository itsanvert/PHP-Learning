<?php
class Person {
    // variable , function
var $name;
function setname($n){
    $this->name = $n;
}
function getname() {
    return $this->name;
}
}

$obj1 = new Person();
$obj2 = new Person();
echo "\$obj1 is an ".gettype($obj1)."<br/>";
echo "\$obj2 is an ".gettype($obj2)."<br/>";
echo $obj1->name. "<br/>" ;
echo $obj2->name."<br/>";

echo "<br/>=====================Call Object========================<br/>";
$person = new Person();
$person ->name = "Vertzy";
echo $person->getname();
echo "<br/>=====================Call Object========================<br/>";
$ps = new Person();
$ps ->setname("dara");
echo $ps->getname();
?>