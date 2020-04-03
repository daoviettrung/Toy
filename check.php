<?php
session_start();
include 'connecthome.php';
if (isset($_POST['txtUser'])) {
    $username = $_POST['txtUser'];
}
if (isset($_POST['txtPass'])) {
    $pass = $_POST['txtPass'];
}
$result = pg_query($dbconn, "select * from login where name = '" . $username . "' and pass = '" . $pass."'");
if (!$result) {
    echo "Đăng nhập thất bại";
} else {
   header('Location: index.php');
}//thử 

