<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require('connection.php');
if (!isset($_SESSION["username"])) {
    echo '<script>';
    echo 'alert("คุณยังไม่ได้เข้าสู่ระบบ");';
    echo 'window.location.href = "login.php";';
    echo '</script>';
    exit();
} else {
    if ($_SESSION["role"] == "admin") {
        header("location: admin-main.php");
    } else {
        header("location: librarian_main.php");
    }
}
?>
 
<?php include('script.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/app.ico" type="image/x-icon">
    <title>โปรแกรมยืมหนังสือ</title>
</head>

<!-- ตรวจสอ login & role-->
<?php
session_start();
require('connection.php');
if (!isset($_SESSION["username"])) {
    echo '<script>';
    echo 'alert("คุณยังไม่ได้เข้าสู่ระบบ");';
    echo 'window.location.href = "login.php";';
    echo '</script>';
    exit();
}
?>

<body>
    <div class="container">
    </div>
</body>
<?php include('script.php'); ?>

>>>>>>> e8e6f18fc4e84e741c7390069d2e2a561dc90624

</html>