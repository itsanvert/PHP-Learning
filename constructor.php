<?php
class Person {
    private $name;
    private $pid;
    public $personStr;
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
    // echo $person->getNamte () ."";
    $person = new Person("Sophea",168);
    $person->setName("Vert");
    echo $person->personStr;
    echo "<br/>";
    
?>