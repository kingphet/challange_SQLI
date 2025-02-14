<?php
session_start();

$host = getenv('MYSQL_HOST');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$db = getenv('MYSQL_DATABASE');

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Vulnerable SQL query - intentionally unsafe for CTF
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result && $result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_data'] = $result->fetch_assoc();
        header('Location: dashboard.php');
        exit;
    } else {
        header('Location: index.php?error=1');
        exit;
    }
}