<section class="category">
    <?php 
    $var1='';
    if(isset($_GET['quanly'])){
        $var1 = $_GET['quanly'];
    }else{
        include("main/index.php");
    }
    if($var1 == 'danhmucsanpham1'){
        include("main/hang1.php");
    }elseif ($var1 == 'danhmucsanpham2') {
        include("main/hang2.php");
    }elseif ($var1 == 'danhmucsanpham3') {
        include("main/hang3.php");
    }elseif ($var1 == 'giaca1') {
        include("main/giaca1.php");
    }elseif ($var1 == 'giaca2') {
        include("main/giaca2.php");
    }elseif ($var1 == 'giaca3') {
        include("main/giaca3.php");
    }
    ?>
</section>