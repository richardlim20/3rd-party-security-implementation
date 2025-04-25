# 3rd-party-security-implementation
Various security implementations using PHP
## Google2Fa
Login System using google 2factor authentication with PHP Mailer
verification is mailed through my personal email
## QRCode2fa
Login System using QR code to authenticate user
Must start at qrCode2fa/genqrcode.php to generate qr code for google authenticator app
Secret will then be added to user details at userprofile.php
Will authenticate corresponding to the code given my QR code on google authenticator app
## RecaptchaV2
Login System implementing RecatpchaV2 which is the button.
## RecaptchaV3
Login System implementing RecaptchaV3 which is invisible and seamless. Able to adjust reCaptcha score value to change how strict validation is. 
Currently allowing if response score is equal or above 0.5
