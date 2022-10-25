<?php session_start();

require_once('../model/connect.php');

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $passwords = md5($password);

    $sql = mysqli_query($conn, "select username from users where username='$username'");
    $row = mysqli_num_rows($sql);
    if ($row > 0) {
        echo "<script>
    alert('username already exist with another account. Please try with other username');</script>";
    } else {
        $msg = mysqli_query($conn, "insert into users(name,username,email,password) values('$name','$username','$email','$passwords')");
        if ($msg) {
            echo "<script>alert('Register successfully');</script>";
        }
    }
}
