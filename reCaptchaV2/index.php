<html>
<head>
    <title>Create Account</title>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body>
    <div>
        <h1>Create Account</h1>
        <form action="process.php" method="post">
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
        <div class="g-recaptcha" data-sitekey="6LcuvCQqAAAAABPCGL_NbNlFdxU9KyUM1ZnJbzPr"></div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Create Account</button>
    </div>
    </form>
    </div>
</body>
</html>