<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    // Array construct
    $users = array("Vert", "Sok", "Meta", "Karona");
    // Add more Array Identify
    $users[] = "Vannda";
    echo "This array of 4 is " . $users[4];
    echo "<br/>";
    // Array identifier

    $user[] = "Sok";
    $user[] = "Dara";
    $user[] = "Vert";
    echo "This array of 0 is " . $user[0];
    echo "<br/>=======================Array fill===================<br/>";
    $member = array_fill(0, 4, "Cambodia");
    echo $member[3];
    $member[] = "Malaysia";
    echo "<br/>" . $member[4];
    echo "<br/>=======================Associative Array===================<br/>";
    $nam = "name";
    $occ = "Occupation";
    $character = array(
        $nam => "Vert",
        $occ => "Student",
        "Age" => 21,
        "adr" => "Phnom Penh"
    );
    echo $character[$occ] . "<br/> " . $character[$nam];
    echo "<br/>";
    echo $character[$nam] . "<br/>" . $character[$occ];
    $character["Age"] = 52;
    $character[$nam] = "Visal";
    echo "<br/>" . $character[$nam] . $character['Age'];
    echo "<br/>=======================Count Array===================<br/>";
    $users = array("Vert", "Ratana", "Davy", "Ryta");
    echo $users[count($users) - 1];

    $test[2] = "Sok";
    $test[56] = "San";
    $test[820] = "Mom";
    echo "<br/> Array Test has " . count($test) . " elements.";
    echo "<br/>Last Element of Array test is " . end($test);
    echo "<br/>=======================Looping in Through Array===================<br/>";
    $users = array("Vert", "Sok", "Meta", "Karona");
    foreach ($users as $val) {
        echo "$val<br/>";
    }
    echo "<br/>=======================Looping in Define Array===================<br/>";
    $user[] = "Vanda";
    $user[] = "Daro";
    $user[] = "Ony";
    foreach ($user as $val) {
        echo "$val<br/>";
    }
    echo "<br/>=======================Looping Associative Array===================<br/>";

    $character = array(
        "name" => "Vert",
        "occupation" => "Student",
        "age" => 20,
        "adr" => "Phnom Penh"
    );
    foreach ($character as $key => $val) {
        echo "$key = $val<br/>";
    }
    echo "<br/>=======================Array Merge===================<br/>";

    // $arr1 = array("a","b","c") ;
    // $arr2 = array(1,2,3) ;
    // $arr3 = array_merge($arr1, $arr2) ;

    // foreach($arr3 as $val){
    //     echo "$val";
    // }
    echo "<br/>=======================Array Push - Unshift===================<br/>";

    // $arr1 = array("a","b","c") ;

    // // Push
    // // $total = array_push($arr1,1,2,3) ;
    // // Unshift
    // $total = array_unshift($arr1,1,2,3) ;
    // // Shift
    // // $total = array_shift($arr1) ;
    // echo "The are $total elements in \$arr1 <br/>";

    // foreach($arr1 as $val){
    //     echo "$val <br/>";
    // }
    echo "<br/>=======================Array shift===================<br/>";

    $student = array("D", "a", "v", "i", "t");

    $total = count($student);
    // Shift
    // $total = array_shift($arr1) ;
    echo "Before sue arry_shift() there are $total elements. <br/>";

    foreach ($student as $val) {
        echo "$val <br/>";
    }
    array_shift($student);
    $total = count($student);
    echo "After use array_shift() there are $total elements. <br/>";
    foreach ($student as $val) {
        echo "$val <br/>";
    }
    echo "<br/>=======================Array slice===================<br/>";
    $first = array("a", "b", "c", "d");
    $second = array_slice($first, 2, 3);
    foreach ($second as $val) {
        echo "$val <br/>";
    }

    echo "<br/>=======================Sort Array===============<br/>";
    $s_arry = array("Bayon", "Taprom", "Angkor", "Prash Vihear");
    rsort($s_arry);
    foreach ($s_arry as $val) {
        echo "$val <br/>";
    }
    echo "<br/>=======================Sort associate Array = asort- sort value ===============<br/>";
    echo "<br/>=======================Sort associate Array = arsort- sort reverse value ===============<br/>";
    $product = array("cocaloca" => 3, "Pepsi" => 2, "Fanta" => 1);
    echo "<br/> An Assciative Array before use asort<br/>";
    foreach ($product as $key => $val) {
        echo "$key=$val <br/>";
    }
    asort($product);
    echo "<br/> an associative Array after use asort<br/>";
    foreach ($product as $key => $val) {
        echo "$key = $val <br/>";
    }
    echo "<br/>=======================KSort associate Array ksort- sort key ===============<br/>";
    echo "<br/>=======================KSort associate Array krsort- sort reverse key ===============<br/>";
    $k_product = array("Cocaloca" => 3, "Pepsi" => 2, "Fanta" => 1);
    echo "<br/> An Assciative Array before use ksort<br/>";
    foreach ($k_product as $key => $val) {
        echo "$key = $val <br/>";
    }
    ksort($k_product);
    echo "<br/> an associative Array after use ksort<br/>";
    foreach ($k_product as $key => $val) {
        echo "$key = $val <br/>";
    }
    ?>

</body>

</html>