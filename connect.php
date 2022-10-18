<?php
header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'gtpt') or die ('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){

    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);
    $name = ($_POST['tenhienthi']);

    $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); 
        window.location="form.php";</script>';
        // Dừng chương trình
        die ();
    }else {
        $sql = "INSERT INTO user (username, password, email, name) VALUES ('$username','$password','$email','$name')";
        // echo '<script language="javascript">alert("Đăng ký thành công!");
        // window.location="form.php";</script>';

        if (mysqli_query($conn, $sql)){
            echo "Tên đăng nhập: ".$_POST['username']."<br/>";
            echo "Mật khẩu: " .$_POST['password']."<br/>";
            echo "Email đăng nhập: ".$_POST['email']."<br/>";
            echo "Tên hiển thị: ".$_POST['tenhienthi']."<br/>";
         }else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");
             window.location="form.php";</script>';
        }
    }
}
?>