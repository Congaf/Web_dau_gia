 <?php 
    $suasp = "SELECT * FROM tbl_sanpham WHERE id_sp = '$_GET[id_sp]' LIMIT  1 ";
    $var1a_suasp = mysqli_query($mysqli, $suasp);
?>
<div class="content1" >
    <h3>Sửa hãng sản phẩm</h3>
    <table id="bangthemhangsp">
        <form method="POST" action="modules/quanlysanpham/xulysp.php?id_sp=<?php echo $_GET['id_sp']?>">
            <?php
            while ($var1 = mysqli_fetch_array($var1a_suasp)) {
            ?>
            <tr>
                <td>Mã sản phẩm:</td>
            </tr>
            <tr>
                <td><input type="text" name="ma_sp" value="<?php echo $var1['ma_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Tên sản phẩm:</td>
            </tr>
            <tr>
                <td><input type="text" name="ten_sp" value="<?php echo $var1['ten_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Hình ảnh:</td>
            </tr>
            <tr>
                <td><input type="file" name="pic_sp" value="<?php echo $var1['pic_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Giá bán:</td>
            </tr>
            <tr>
                <td><input type="text" name="gia_sp" value="<?php echo $var1['gia_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Thương hiệu:</td>
            </tr>
            <tr>
                <td><input type="text" name="thuonghieu_sp" value="<?php echo $var1['thuonghieu_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Bảo hành:</td>
            </tr>
            <tr>
                <td><input type="text" name="baohanh_sp" value="<?php echo $var1['baohanh_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Đường kính mặt:</td>
            </tr>
            <tr>
                <td><input type="text" name="size_sp" value="<?php echo $var1['size_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Độ chịu nước:</td>
            </tr>
            <tr>
                <td><input type="text" name="dochiunuoc_sp" value="<?php echo $var1['dochiunuoc_sp'] ?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Năng lượng:</td>
            </tr>
            <tr>
                <td><input type="text" name="nangluong_sp" value="<?php echo $var1['nangluong_sp'] ?>" style="width:100%;"></td>
            </tr>
             <tr>
                <td colspan="2"><input name="suasp" type="submit" value="Sửa" style="width:100%; text-align:center; margin-top:7px; font-weight: bold; font-size: 20px;"></td>
             </tr>
             <?php } ?>
        </form>
    </table>
</div>