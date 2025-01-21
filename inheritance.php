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
    private $price;
    function __construct($name, $code, $price)
    {
        parent::__construct($name, $code);
        $this->price = $price;
    }
    //Override Function of PriceItem 
    function getName()
    {
        // return "Price : " . $this->name;
        //keyword parent = Parent class (Item).
        return "ItemName : " . parent::getName() . "<br/> " . "Price : " . $this->price . "$";
    }
}


$item = new Item("Coca", 124);
$item->setName("Fanta", 123); // new set
echo $item->getName();
echo "<br/>";
//Override Function of PriceItem 
$pItem = new PriceItem("Coca", 0123, 2);
echo $pItem->getName();
echo "<br/>";
