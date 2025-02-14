<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(is_array($_POST['product'])){
        
        foreach($_POST['product'] as $val){
            echo "<b> Your product choice are : </b> . $val <br/>";
        }
    }
    ?>
</body>
</html>