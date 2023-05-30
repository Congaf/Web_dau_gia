<?php
$var2a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_gia2 ORDER BY id_sp ASC');
?>
<div class="item-row ">
            <div class="title">
                <SPAN>TỪ 5 ĐẾN 10 TRIỆU</SPAN>
            </div>
            <div class="items  row">
                <?php 
                $var2a = 0;
                 while($var2b = mysqli_fetch_array($var2a_hienthi)){
                    $var2a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile_gia2/<?php echo $var2b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor.php?action=gia2&id=<?php echo $var2b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var2b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá bán gốc: <?php echo number_format($var2b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var2b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                 <?php 
                }
                ?>
            </div>

        </div>