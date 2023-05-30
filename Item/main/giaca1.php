<?php 
    $var1a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_gia1 ORDER BY id_sp ASC');
?>
<div class="item-row ">
            <div class="title ">
                <SPAN>TỪ 0 ĐẾN 5 TRIỆU</SPAN>
            </div>
            <div class="items row">
             
                <?php 
                $var1a = 0;
                while($var1b = mysqli_fetch_array($var1a_hienthi)){
                    $var1a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile_gia1/<?php echo $var1b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor.php?action=gia1&id=<?php echo $var1b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var1b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá bán gốc: <?php echo number_format($var1b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var1b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                <?php 
                }
                ?>               
            </div>
        </div>