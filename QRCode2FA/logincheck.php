<?php
/*
* include files needed
*/
require_once 'userprofile.php';
/*
* Get the data posted from index.php
*/
$email = $_POST["email"];
$password = $_POST["password"];
/*
* Check if username and password and secret are correct based on the userprofile.php
*/
if($email === $dummy_user['email'] && $password === $dummy_user['password']){
    include "twofactor.php"; 
}
else{
echo "email or password is wrong.";
}

?>
