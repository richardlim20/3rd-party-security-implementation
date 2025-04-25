<?php
/*
* include files needed
*/
require_once 'PHPGangsta/GoogleAuthenticator.php';
require_once 'userprofile.php';
/*
* Get the data posted from index.php
*/
$otp = $_POST["otp"];
/*
* Define authenticator object
*/
$ga = new PHPGangsta_GoogleAuthenticator();

//validates user and one time code
    $checkResult = $ga->verifyCode($dummy_user['secret'], $otp, 2); // 2 = 2*30sec clock tolerance
if ($checkResult) {
echo 'Welcome to the webpage.';
} else {
echo 'Your OTP failed.';
}
?>