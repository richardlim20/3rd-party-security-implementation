<html>
<head>
    <title>Create Account</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("CreateAccountForm").submit();
        }
    </script>
</head>
<body>
    <div>
        <h1>Create Account</h1>
        <form id="CreateAccountForm" action="process.php" method="post">
    <div>
        <label for="text">Email:</label>
        <input type="text" name="email" required>
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label>Retype password:</label>
        <input type="password" name="retypePassword" required>
    </div>
    <div>
        <button type="submit" class="g-recaptcha" data-sitekey="6LdClSUqAAAAAFmawC8RgFNdmRUWIdUX7Y70rjTg" data-callback='onSubmit'>Create Account</button>
        <button type="reset">Reset</button>
    </div>
    </form>
    </div>
</body>
</html>