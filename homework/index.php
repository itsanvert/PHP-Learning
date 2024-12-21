<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Homework 1: Logical statement if</br>";
    $totalScore = 100;

    if ($totalScore <= 60) {
        echo "E"." Grade</br>";
        } else if($totalScore <=70) {
echo "D"." Grade</br>";
        } else if($totalScore <=80) {
            echo "C"." Grade</br>";
        }else if($totalScore <=90) {
            echo "B"." Grade</br>";
        } else if ($totalScore <=100 ){
            echo "A"." Grade</br>";
        } else {
            echo "F"." Grade</br>";
        }
        echo "The resuit is :".$totalScore;
    ?>
</body>
</html>