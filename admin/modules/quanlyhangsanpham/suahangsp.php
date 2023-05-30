 <?php 
    $suahangsp = "SELECT * FROM tbl_hangsp WHERE id_hangsp = '$_GET[idhangsp]' LIMIT  1 ";
    $var1a_suahangsp = mysqli_query($mysqli, $suahangsp);
?>
<div class="content1" >
    <h3>Sửa hãng sản phẩm</h3>
    <table id="bangthemhangsp">
        <form method="POST" action="modules/quanlyhangsanpham/xuly.php?idhangsp=<?php echo $_GET['idhangsp']?>">
            <?php
            while ($var1 = mysqli_fetch_array($var1a_suahangsp)) {
            ?>
            <tr>
                <td>Tên hãng sản phẩm:</td>
            </tr>
            <tr>
                <td><input type="text" name="tenhang" value="<?php echo $var1['hangsp_name'] ?>" style="width:100%;"></td>
            </tr>
             <tr>
                <td colspan="2"><input name="suahang" type="submit" value="Sửa" style="width:100%; text-align:center; margin-top:7px; font-weight: bold; font-size: 20px;"></td>
             </tr>
             <?php } ?>
        </form>
    </table>
</div>