<?php
class Person {
    var $name;
    var $pid;
    var $personStr;
    function __construct($name = "Vert", $pid = 0) {
        $this ->name = $name;
        $this ->pid = $pid;
}
function setName ($n) 
{
    $this-> name = $n;
    $this->personStr= $this->name ."".$this->pid;
}
function getname () {
     return $this ->name;
     }
    }
    // $person = new Person("Darya");
    // echo $person->getName () ."";
    $person = new Person("Sophea",168);
    $person->setName("Vert");
    echo $person->personStr;
    




?>