<?php
//Checks for recaptcha when form is submitted using POST
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $recaptcha_secret = "6LdClSUqAAAAAFQf95S5GEXC4XocVaJ143ZCm5Us";
    //Sends request to reCaptcha
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
    //Response is decoded into an array
    $response = json_decode($response, true);

    //Check if passwords match
    $password = $_POST['password'];
    $retypePassword = $_POST['retypePassword'];
    if($password !== $retypePassword){
        echo "Passwords do not match";
    }

    //else if passwords do match
    else{
        //if response is success recaptcha has been successfully completed
        if($response["success"] === true && $response["score"] >= 0.5){
            echo "Form Submit Successfully.";
        }
        //otherwise the form was done by a robot
        else{
            echo "You are a robot";
        }
    }
}
?>