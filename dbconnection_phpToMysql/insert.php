<?php
$username = $_REQUEST['txtUserName'];
$password = $_REQUEST['txtPassword'];
$email = $_REQUEST['txtEmail'];
$name = $_REQUEST['txtName'];
if (!empty( $username ) && !empty( $password ) && !empty($name) && !empty($email) ){
} else {
    echo  'Please fill your data in all fields.';
}
// $query = "INSERT INTO tblpeople (username,password_,name,email) VALUES('txtUserName','txtPassword','txtEmail','txtName')";

?>