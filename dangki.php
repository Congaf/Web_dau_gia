<?php
    include("admin/config/config.php");
    if(isset($_POST['button'])){
        $taikhoan = $_POST['phone'];
        $hoten = $_POST['hoten'];
        $matkhau = md5($_POST['matkhau']);
        $var1 = mysqli_query($mysqli,"INSERT INTO tbl_user(phone,hoten,matkhau) VALUE ('".$taikhoan."','".$hoten."','".$matkhau."')");
        header("Location:login.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dangki.css">
    <script src="dangky.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    
</head>
<body>
    <div class="container">
        <form action="dangki-button.php" method="post">
            <div class="dangky" >
                <h1>ĐĂNG KÝ</h1>
                <div class="form-text">
                    <!-- id trùng name -->
                    <input  id="phone" type="tel" placeholder="Số điện thoại" name="phone">
                </div>
                <div class="form-text">
                    <input  id="hoten" type="text" placeholder="Họ tên" name="hoten">
                </div>
                <div class="form-text">
                    <input  id="matkhau" type="password" placeholder="Mật Khẩu" name="matkhau" >
                </div>
                <div class="form-text">
                    <input  id="nhaplaimatkhau" type="password" placeholder="Nhập lại mật Khẩu" name="nhaplaimatkhau">
                </div>
                <button  type="sumbit" onclick=send()  class="button" name="button">ĐĂNG KÝ</button>
            </div>
        </form>
    </div>
<script src="js/dangki.js"></script>
</body>
</html>