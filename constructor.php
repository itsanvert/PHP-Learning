<?php
class Person
{
    private $name;
    private $pid;
    public $personStr;
    function __construct($name = "Vert", $pid = 0)
    {
        $this->name = $name;
        $this->pid = $pid;
    }
    function setName($n)
    {
        $this->name = $n;
        // $this->personStr= $this->name ."".$this->pid;
        $this->makePersonStr($n, $this->pid);
    }
    public function makePersonStr($string, $code)
    {
        return $this->personStr = " $string $code";
    }
    function getname()
    {
        return $this->name;
    }
}
// $person = new Person("Darya");
// echo $person->getNamte () ."";
$person = new Person("Sophea", 168);
// $person->setName("Vert");
// echo $person->personStr;
echo $person->makePersonStr("Vert123", 123); // use Function of MakepersonStr
echo "<br/>";
