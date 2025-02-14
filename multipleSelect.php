<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Select</title>
</head>
<body>
    <center>
        <h2>Multiple Select</h2>
        <hr width = "50%">
        <!-- <form action="./multiple.php" method="POST">
        <select name="product[]" multiple="multiple">
            <option>Coca</option>
            <option>Fanta</option>
            <option>Sprite</option>
            <option>Merida</option>
            <option>Pepsi</option>
        </select>
        <br/><br/>
        <input type="submit" value="submit"> -->
        <!-- </form> -->
<input type="button" value="">
        <form action="./multiple.php" method="POST">

            <input type="checkbox"  name="product[]" value="Cocacola">Cocacola
            <input type="checkbox"  name="product[]" value="Fanta">Fanta
            <input type="checkbox"  name="product[]" value="Sprite">Sprite
            <input type="checkbox"  name="product[]" value="Merinda">Merinda
            <input type="checkbox"  name="product[]" value="Pepsi">Pepsi
        <br/><br/>
        <input type="submit" value="submit">
        </form>
    </center>
</body>
</html>