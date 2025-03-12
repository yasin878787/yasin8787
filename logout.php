<?php
session_start();
session_destroy();
header("Location: index.html"); // برگشت به صفحه ورود بعد از خروج
exit;
?>
