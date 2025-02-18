<?php


// $link = mysqli_connect('localhost','root','');
// if(!$link) {
//     die('Could not connect to Database');
// } else {
//     echo'Successfully connected';
// }
// $database = 'sbkudb';
// mysqli_select_db($link,$database) or die('Could not Select database');
$user = 'root';
$pwd = '';
$database = 'sbkudb';
$link = mysqli_connect('localhost',$user,$pwd, $database);
if (!$link) {
die('Could not connect to mySql'. mysqli_connect_error());
} else {
    echo "<h2>Successfully connect to Server.</h2>";
}
if (!mysqli_select_db($link,"$database")) {
    die('Could not Select database.'. mysqli_connect_error());

} else {
    echo "<h3>Successfully connect to Database.</h3>";
}
$query = "INSERT INTO tblpeople (username,password_,name,email) VALUES('Admin','12345','Vert','itsanvert@gmail.com')";
if (!mysqli_query($link, $query)) {
    die("Could not Inserted". mysqli_error($link));
} else {
    echo "<h4>Your data has been inserted.</h4>";
}
mysqli_close($link)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <CENTER>
        <h2>Adding user input to databases</h2>
        <hr width="550">
        <form action="insert.php">
            <table>
                <tr>
                <td>Username : </td>
                <td><input type="text" name="txtUserName" id=""></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="text" name="txtPassword" id=""></td>
            </tr>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="txtName" id=""></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="txtEmail" id=""></td>
            </tr>
            <tr aign="right" colspan="2">
               <input type="submit" VALUES = "submit" id="">
            </tr>
            </table>
        </form>
    </CENTER>
</body>
</html>