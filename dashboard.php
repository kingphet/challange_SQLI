<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit;
}

$flag = $_SESSION['user_data']['flag'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - CTF Challenge</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .flag { background: #f0f0f0; padding: 20px; margin: 20px 0; }
    </style>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <div class="flag">
        <h3>Congratulations! Here's your flag:</h3>
        <code><?php echo htmlspecialchars($flag); ?></code>
    </div>
    <a href="logout.php">Logout</a>
</body>
</html>

-- logout.php
<?php
session_start();
session_destroy();
header('Location: index.php');
exit;