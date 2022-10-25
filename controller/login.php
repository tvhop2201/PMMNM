<?php
session_start();
require_once('../model/connect.php');

if (isset($_POST['signin'])) {
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) {
        echo "<script> alert('xin moi nhap cho dung, load de nhap lai');</script>";
        exit;
    }
    $password = md5($password);

    $sql = mysqli_query($conn, "SELECT username, password FROM users WHERE username='$username'");
    $row = mysqli_num_rows($sql);
    if ($row == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $rowpassword = mysqli_fetch_array($sql);
    if ($password != $rowpassword['password']) {
        echo "<script> alert('xin moi nhap cho dung, load de nhap lai');</script>";
        exit;
    }


    
    
    $_SESSION['id'] = strval($username) ;
    $extra = "../view/welcome.php";
    // $host = $_SERVER['HTTP_HOST'];
    header("location: ../view/welcome.php");
    // echo ". <script> alert('Xin chào $username ban da dang nhap thanh cong');</script>";
    // $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    // die();
}
