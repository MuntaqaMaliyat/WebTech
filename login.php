<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
</head>
<body>
    <div class="login-form">
        <div class="logo-title">
            <img src="icons/logo.png" alt="Logo" class="logo">
            <h1>Mental Health Support System</h1>
        </div>
        <h2>Login</h2>
        <form action="authenticate.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
