<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$login = $_POST['login'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios WHERE login = ? AND password = SHA1(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $login, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  
    $_SESSION['login'] = $login;
    header("Location: welcome.php");
} else {
    header("Location: index.php?error=1");
}

$stmt->close();
$conn->close();
?>
