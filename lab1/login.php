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
    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result && $result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_data'] = $result->fetch_assoc();
        echo "<h1>flag{SQL_Injection_1s_4w3s0me}</h1>";
        exit;
    } else {
        echo "<h1>If you can't login you are gay</h1>";
        exit;
    }
}
