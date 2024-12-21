<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("USER","Angkor");
    echo "Welcome to".USER;

    echo "</br>";
    $user = "Admin";
    $pwd = "123";
    
    if ($user =="Admin" && $pwd == "123") {
        echo "Success.";
    } else {
        echo "Fail.";
    }

    echo "<br/>====Switch Statement====<br/>";
    $name = "Dara";
    switch ($name){
        case "Dara":
            echo "Hello Dara";
            break;

            case "Daro":
                echo "Hello Daro";
                break;
                case "Many":
                    echo "Hello Many";
                    echo "<br/>====Cast Operator====<br/>";
                    default:
                    echo "No one Know.";

    }

    echo "<br/>";
    $day =5;
    switch($day) {
        case 1:
            echo "Monday";
            break;
            case 2:
            echo "Tuesday";
            break;
            case 3:
                echo "Wednesday";
                break;
                case 4:
                    echo "Thursday";
                    break;
                    case 5:
                        echo "Friday";
                        break;
                        case 6:
                            echo "Saturday";
                            break;
                            case 7:
                                echo "Sunday";
                                break;
                                default:
                                echo "Unknown";
    }

    echo "<br/>==============While Loop=============</br>";
    $sum = 0;
    $i = 1;
    $str = "";
    while($i<=20){
        $sum +=$i;
        $str = $str . "$i+";
        $i++;

    }
    echo substr($str,0,-1)." = $sum";
    echo "</br>";
    echo "</br>=============Do While Loop============</br>";
    $sum = 0;
    $i = 1;
    $str = "";
    do{
        $sum +=$i;
        $str = $str . "$i+";
        $i += 2;
    } while($i<=30);
        echo substr($str,0,-1)." = $sum";
        echo "<br/>=========For Loop====================</br>";
        $sum = 0;
        $str = "";
        for($i =1; $i<=10;$i++){
            $sum += $i;
            $str = $str. "$i+";
        }
        echo substr($str,0,-1). " = $sum";
        echo "</br>=========Breal Statment=========<br/>";
        $counter = -5 ;
        for (;$counter<=10;$counter++){
            if($counter===0){
                continue;
            }
            $temp = 2000/$counter;
            echo "2000 divided by $counter is ....$temp<br/>";
        }
        // Nested Loop
        echo "</br>=========Nested Loop=========<br/>";
        for($i =1;$i <=5;$i++){
            echo "The value i + ".$i. "<br/>";
            for($j =1; $j <=3; $j++){
                echo "Value j = ".$j."</br>";
                echo "<table border=\"1\">";
            }
        }

        for($y=2;$y<=10;$y++){
            echo "<tr>";
            for($x=1;$x<=10;$x++){
                echo "<td>";
          
                echo $x." * ".$y." = ".($x*$y);
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</br>=========Nested Loop=========<br/>";

        
    ?>
</body>
</html>