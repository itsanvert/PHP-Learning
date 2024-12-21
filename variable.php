<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Week 1 : Varialbe
    $num1 = 5;
    $num2 = 8;
    $resuit;
    $resuit= $num1 + $num2;
    echo "Number 1 = $num1";
    echo "<br/>Number 2 = $num2";
    echo "<br/>The sum of Num1 and Num2 is $resuit" ;


    $testing;
    echo gettype($testing);//NULL
    echo "</br>";
    $testing = 5;
    echo gettype($testing);//Integer
    echo "</br>";
    $testing ="One";
    echo gettype($testing);// String
    echo "</br>";
    $testing = 5.0;
    echo gettype($testing);// Double
    echo "</br>";
    $testing = true;
    echo gettype($testing);//Bollean
    echo "</br>";

// Week 2 : Gettype() and Var_dump()
    $name="Vert";
    //Double Scote
    echo "Hello," ,$name;
    //Single Scote
    echo "</br>";
    echo 'Hello, $name.';

    echo "</br>";
    $testing = 5;
    echo var_dump($testing);
    echo "</br>";
    echo gettype($testing);

    echo "<br/>====Cast Operator====<br/>";
    $unexpect = 3.14;
    $holder = (double)$unexpect;
    echo gettype($holder);
    echo "-----$holder</br>";
    $holder = (string)$unexpect;
    echo gettype($holder);
    echo "-----$holder</br>";

    $holder = (int)$unexpect;
    echo gettype($holder);
    echo "-----$holder</br>";

    $unexpect = 0;
    $holder = (bool)$unexpect;
    echo gettype($holder);
    echo "-----$holder</br>";


    echo "======Concatnation====</br>";
    echo "Hello"." ". "World.</br>";

    $year = 2024;
    echo "Happy new year ".$year."</br>";

    $x = 20;
    //$x = $x+4
    $x += 4;
    echo $x;
    
    

    ?>
</body>
</html>