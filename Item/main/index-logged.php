<?php 
    $var1a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_sanpham ORDER BY id_sp ASC');
    $var2a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_sanphamhang1 ORDER BY id_sp ASC');
    $var3a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_sanphamhang2 ORDER BY id_sp ASC');
    $var4a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_sanphamhang3 ORDER BY id_sp ASC');
?>
    <div class="item-row "> 
            <div class="title">
                <SPAN>SẢN PHẨM NỔI BẬT</SPAN>
            </div>
            <div class="items row">
                <?php 
                $var1a = 0;
                while($var1b = mysqli_fetch_array($var1a_hienthi)){
                    $var1a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile/<?php echo $var1b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor.php?action=sanpham&id=<?php echo $var1b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var1b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá bán gốc: <?php echo number_format($var1b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var1b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                <?php 
                }
                ?>
            </div>
        </div>

        
        <div class="item-row ">
            <div class="title">
                <SPAN>ĐỒNG HỒ STUHRLING ORIGINAL</SPAN>
            </div>
            <div class="items row">
                <?php 
                $var2a = 0;
                 while($var2b = mysqli_fetch_array($var2a_hienthi)){
                    $var2a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile_hang1/<?php echo $var2b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor-hang1.php?action=hang1&id=<?php echo $var2b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var2b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá gốc: <?php echo number_format($var2b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var2b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                 <?php 
                }
                ?>
            </div>
        </div>

        
        <div class="item-row ">
            <div class="title ">
                <SPAN>ĐỒNG HỒ DIAMOND D</SPAN>
            </div>
            <div class="items  row">
                <?php 
                $var3a = 0;
                 while($var3b = mysqli_fetch_array($var3a_hienthi)){
                    $var3a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile_hang2/<?php echo $var3b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor-hang2.php?action=hang2&id=<?php echo $var3b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var3b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá gốc: <?php echo number_format($var3b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var3b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                 <?php 
                }
                ?>
            </div>
        </div>

        
        <div class="item-row ">
            <div class="title ">
                <SPAN>ĐỒNG HỒ BRUNO SOHNLE GLASHUTTE</SPAN>
            </div>
            <div class="items row ">
                <?php 
                $var4a = 0;
                 while($var4b = mysqli_fetch_array($var4a_hienthi)){
                    $var4a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile_hang3/<?php echo $var4b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor-hang3.php?action=hang3&id=<?php echo $var4b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var4b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá gốc: <?php echo number_format($var4b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var4b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                 <?php 
                }
                ?>
            </div>
        </div>
        