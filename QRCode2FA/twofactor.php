<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two factor authentification</title>
</head>
<body>
    <h4>Two factor authentification</h4>
    <form action="verify.php" method="post">
        <div class="form-group">
            <label for="">Enter 2-step verification code</label>
            <input type="text" name="otp" class="form-control"/>
        </div>
            <div class="form-group">
            <input type="submit" name="btnLogin" class="btn btn-primary" value="Login"/>
        </div>
    </form>
</body>
</html>