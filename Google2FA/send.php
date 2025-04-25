<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent code</title>
</head>
<body>
    <div class="row">
        <div class="col-md-5 col-md-offset-3 well">
            <h4>We have sent a secret code to your email.</h4>
            <h4>Please check your email for the code and insert the code in the input field</h4>
            <form action="verify.php" method="post">
                <div class="form-group">
                    <label for="">Verify Code</label>
                    <input type="text" name="VerifyCode" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnLogin" class="btn btn-primary" value="Verify Code"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer\src\Exception.php';
require 'PHPmailer\src\PHPMailer.php';
require 'PHPmailer\src\SMTP.php';

$mail = new PHPMailer(true);
 
try {
    //Start session to store verfication code
    session_start();

    //$mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'richardlim366@gmail.com'; //my personal gmail
    $mail->Password   = 'ovji yhbl vaty gwtc'; //gmail app password
    $mail->SMTPSecure = 'ssl';                              
    $mail->Port       = 465; //gmail port
 
    $mail->setFrom('richardlim366@gmail.com', 'Richard');           
    $mail->addAddress($_POST["email"]);
      
    $mail->isHTML(true);
    //Generate random verfication code
    $verificationCode = random_int(100000, 999999);
    $stringCode = strval($verificationCode);
    //Stores verfication code in session
    $_SESSION['storedCode'] = $stringCode;
    
    $mail->Subject = 'Verification code';
    $mail->Body    = 'Your verification code is: ' . $stringCode;
    $mail->AltBody = 'Your verification code is: ' . $stringCode;
    $mail->send();


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>