<?php
class Item
{
    private $name;
    var $code;
    function __construct($name = "item", $code = "0")
    {
        $this->name = $name;
        $this->code = $code;
    }
    function setName($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }
    function getName()
    {
        return $this->name;
    }
}
class PriceItem extends Item
{
    //Override Function of PriceItem 
    function getName()
    {
        // return "Price : " . $this->name;
        //Class Perent of class Item
        return "(Price) : " . parent::getName();
    }
}


$item = new Item("Coca", 124);
$item->setName("Fanta", 123); // new set
echo $item->getName();
echo "<br/>";
//Override Function of PriceItem 
$pItem = new PriceItem("Angkor", 168);
echo $pItem->getName();
echo "<br/>";
