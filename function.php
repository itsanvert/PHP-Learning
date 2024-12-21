<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <!-- Function has 2 functions:
    - build-in Function
    - Define Function 
    + No return
    + Return Type
    + None Argument
    +  Argument -->
    <?php
    function bigsum() {
        $sum = 0;
        $str = "";
        for($i=1;$i<=10;$i++){
            $sum += $i;
            $str = $str. "$i+";
        }
        echo substr($str,0,-1). " = $sum";
    } 
    // function with argument $count
    function bigArg($start,$count){
        $sum = 0;
        $str = "";
        for($i=$start;$i<=$count;$i++) {
            $sum += $i;
            $str = $str. "$i +";
            
        }
        echo "</br>";
        echo substr($str,0,-1)." = $sum";
    }
    bigsum();
    bigArg(5,20);
    echo "<br/> =======================Return Function=====================<br/>";
    $test = "Hello World";
    function addNums($num1,$num2) {
        $result = $num1 + $num2;
        echo "Num1 : ".$num1."</br>"."Num2 : ".$num2."</br>";
        return "The result is: ".$result;
    }
    
    echo addNums(5,6);
    echo "</br>";
    echo $test;
    echo "<br/> =======================Scop Function=====================<br/>";

    $lottery = 42;
    function lotteryToday(){
        global $lottery;
        echo "Lottery Today is: ".$lottery;
    }
    lotteryToday();
    ?>
</body>
</html>