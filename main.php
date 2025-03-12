<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.html"); // هدایت به صفحه ورود اگر لاگین نکرده باشد
    exit;
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی</title>
</head>
<body>
    <h2>به سایت خوش آمدید!</h2>
    <a href="logout.php">خروج</a>
</body>
</html>
