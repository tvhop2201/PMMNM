<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form  method="post" action="connect.php" class="form container">
  <div class="form-group">
    <label for="exampleInputAccount">Tài Khoản:</label>
    <input type="Account" name="username" class="form-control" id="exampleInputAccount" placeholder="Nhập Tài Khoản" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Mật Khẩu:</label>
    <input type="matkhau" name="password" class="form-control" id="exampleInputPassword" placeholder="Nhập mật khẩu" />
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nhập lại mật khẩu:</label>
    <input type="matkhau1" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu" />
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Email:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Nhập email" />
  </div>
  <div class="form-group">
    <label for="name">Tên Hiện Thị:</label>
    <input type="name" name="tenhienthi" class="form-control" id="name" placeholder="Nhập tên hiển thị" />
  </div>
  <button type="submit" name="dangky" class="btn btn-primary">Đăng Kí</button>
  <?php require 'connect.php';?>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
helo