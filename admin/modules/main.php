<section class="category">
    <div class="content-top">
        <h3>Hello Admin!</h3>
    </div>
    <div class="content-main">
        <div class="menu-left">
            <ul>
                <li><a href="index.php?action=quanlyhangsanpham&query=themhangsp">Quản lý các hãng sản phẩm</a></li>
                <li><a href="index.php?action=quanlysanpham&query=themsp">Quản lý các sản phẩm</a></li>
            </ul>
        </div>
        <div class="content-right">
            <?php 
                if(isset($_GET['action']) && $_GET['query']){
                    $var2 = $_GET['action'];
                    $var3 = $_GET['query'];
                }else{
                    $var2 = '';
                    $var3 = '';
                }
                if($var2 == 'quanlyhangsanpham' && $var3=='themhangsp' ){
                    include("modules/quanlyhangsanpham/themhangsp.php");
                    include("modules/quanlyhangsanpham/lietkehangsp.php");
                }elseif ($var2 == 'quanlyhangsanpham' && $var3=='suahangsp') {
                    include("modules/quanlyhangsanpham/suahangsp.php");
                }elseif ($var2 =='quanlysanpham' && $var3=='themsp') {
                    include("modules/quanlysanpham/themsp.php");
                    include("modules/quanlysanpham/lietkesp.php");
                }elseif ($var2 =='quanlysanpham' && $var3=='suasp') {
                    include("modules/quanlysanpham/suasp.php");
                }else {
                    include("dashboard.php");
                }
            ?>
        </div>
    </div>
</section>