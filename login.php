<?php 
    session_start();
    include("admin/config/config.php");
    if(isset($_POST['button'])){
        $taikhoan = $_POST['phone'];
        $matkhau =($_POST['matkhau']);
        $sql =  "SELECT * FROM tbl_admin WHERE username ='".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
        $sql1 =  "SELECT * FROM tbl_user WHERE phone ='".$taikhoan."' AND matkhau = '".$matkhau."' LIMIT 1";
        $var1 = mysqli_query($mysqli,$sql);
        $var2 = mysqli_query($mysqli,$sql1);
        $count= mysqli_num_rows($var1);
        $count2=mysqli_num_rows($var2);
        mysqli_free_result($var1);
        if($count>0 && $count2==0 ){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:admin/index.php");
        }elseif ($count ==0 && $count2 > 0) {
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index-logged.php");
        }else {
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.");</script>';
            header("Location:login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">    
</head>
<body>
    <div class="container">
        <form action="" autocomplete="off" method="POST">
            <div class="dangnhap" >
                <h1>ĐĂNG NHẬP</h1>
                <div class="form-text">
                <input  id="phone" type="tel" placeholder="Số điện thoại" autocomplete="off" name="phone"/>
                </div>
                <div class="form-text">
                <input  id="matkhau" type="password" autocomplete="off" placeholder="Mật Khẩu" name="matkhau" />
                </div>
                <button onclick=send() type="sumbit"  class="btn" name="button">ĐĂNG NHẬP</button>
                <!-- <input class="btn" type="submit" oncli name="button" value="Đăng nhập"> -->
                <div class="box">
                    <span>HOẶC</span>
                </div>
                
                <div class="a">
                    <a href="dangki.php">ĐĂNG KÝ</a>
                </div>
            </div>
        </form>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/login.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
</body>
</html>