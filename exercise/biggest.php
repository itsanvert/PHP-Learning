<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function compareFunction($val1,$val2,$val3) {
        $result = 0;
        if ($val1 > $val2){
            $result = $val1;
            
        } else {
            $result = $val2;
        }
        if ($result > $val3) {
            $result = $result;
        } else {
            $result = $val3;
        }
        return "The bigger is ".$result. "<br/>";
    }
    echo compareFunction(10,6,7)
    ?>
</body>
</html>