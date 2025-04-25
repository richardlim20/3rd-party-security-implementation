<?php
session_start(); // Start the session to access the stored verification code

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['VerifyCode'])) {
        $inputCode = $_POST['VerifyCode'];
        $storedCode = $_SESSION['storedCode']; // Retrieve the stored code from the session

        // Compare the input code with the stored code
        if ($inputCode === $storedCode) {
            echo "You have entered 2FA secret code correctly. Login Successful!";
        } else {
            echo "You have eneterd Wrong 2FA code. Login Failed!";
        }
    } 
}
?>