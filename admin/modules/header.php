<?php if(isset($_GET['quanly'])== 'dangxuat'){
    unset($_SESSION['dangnhap']);
    header('Location:../index.php');
} ?>
<header style="display: flex;" >
        <div class="logo">
            <img src="../img/LOGO.png" alt="Logo" width="200" height="90">
        </div>
        
        <div class="menu"> 
            <li><a href="index.php">TRANG CHỦ</a></li>
            <li><a href="">DANH SÁCH SẢN PHẨM<i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="index.php?quanly=danhmucsanpham1">Đồng hồ Stuhrling original</a></li>
                    <li><a href="index.php?quanly=danhmucsanpham2">Đồng hồ Diamond D</a></li>
                    <li><a href="index.php?quanly=danhmucsanpham3">Đồng hồ Bruno sohnle glashutte</a></li>
                </ul>           
            </li>
            <li><a href="">GIÁ TIỀN <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="index.php?quanly=giaca1">Từ 0 đến 5 triệu</a></li>
                    <li><a href="index.php?quanly=giaca2">Từ 5 đến 10 triệu</a></li>
                    <li><a href="index.php?quanly=giaca3">Từ 10 triệu trở lên</a></li>
                </ul>
            </li>
            <li style="font-size: 13px; color: white;font-weight: bold;display: block;line-height: 30px;text-align: center">
                <span >Hi!Admin</span>
            </li>
            <li><a href="index.php?quanly=dangxuat">Đăng xuất</a></li>
            <li><a href=""><i class="fas fa-headphones-alt"></i>HOTLINE: 123456789</a></li>
        </div>
</header>