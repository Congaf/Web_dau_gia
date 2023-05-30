<?php 
    $var3a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_gia3 ORDER BY id_sp ASC');
?>
<div class="item-row ">
            <div class="title ">
                <SPAN>TỪ 10 TRIỆU TRỞ LÊN</SPAN>
            </div>
            <div class="items row ">
                <?php 
                $var3a = 0;
                 while($var3b = mysqli_fetch_array($var3a_hienthi)){
                    $var3a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile_gia3/<?php echo $var3b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor.php?action=gia3&id=<?php echo $var3b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var3b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá bán gốc: <?php echo number_format($var3b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var3b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                 <?php 
                }
                ?>
            </div>
        </div>