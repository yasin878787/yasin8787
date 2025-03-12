<?php
session_start();

// اطلاعات ورود مشخص‌شده
$correct_username = "yasin";
$correct_password = "1387"; // رمز عبور برای تست

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION["loggedin"] = true;
        echo "success";
    } else {
        echo "error";
    }
}
?>
