<!DOCTYPE html>
<html>
<head>
    <title>CTF Login Challenge</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .login-form { max-width: 300px; margin: 0 auto; }
        input { width: 100%; padding: 8px; margin: 8px 0; }
        button { width: 100%; padding: 8px; background: #4CAF50; color: white; border: none; }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>