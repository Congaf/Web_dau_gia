<?php 
    $var4a_hienthi = mysqli_query($mysqli,'SELECT * FROM tbl_sanphamhang3 ORDER BY id_sp ASC');
?>
<div class="item-row "> 
        <div class="title">
            <SPAN>ĐỒNG HỒ BRUNO SOHNLE GLASHUTTE</SPAN>
        </div>
        <div class="items row">
                <?php 
                $var4a = 0;
                 while($var4b = mysqli_fetch_array($var4a_hienthi)){
                    $var4a ++;
                ?>
                <div class="item ">
                    <a href=""><img class="img-product" src="img/upfile_hang3/<?php echo $var4b['pic_sp'] ?>" ></a><br>
                    <button type="button"><a href="item-infor.php?action=hang3&id=<?php echo $var4b['id_sp'] ?>"><i class="fas fa-gavel"></i>Đấu giá ngay</a></button><br>
                    <a class="item-name" href=""><?php echo $var4b['ten_sp'] ?></a><br>
                    <span class="price-product">Giá bán gốc: <?php echo number_format($var4b['gia_sp']).'vnđ' ?></span><br>
                    <span class="red">Khởi điểm: <?php echo number_format($var4b['gia_sp']*0.5).'vnđ' ?></span>
                </div>
                 <?php 
                }
                ?>  
        </div>
    </div>