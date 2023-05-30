<?php 
    $var1a_lietkesp = mysqli_query($mysqli,'SELECT * FROM tbl_sanpham ORDER BY id_sp ASC');
?>
<div class="content2">
    <h3>Các hãng sản phẩm</h3>
    <table id="banghangsp"  style="width:100%;  border:1px solid black;">
        <form action="modules/quanlysanpham/xulysp.php" method="POST">
        <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá tiền</th>
            <th>Thương hiệu</th>
            <th>Bảo hành</th>
            <th>Đường kính mặt</th>
            <th>Độ chịu nước</th>
            <th>Năng lượng</th>
            <th>Thao tác</th>
        </tr>
        <?php 
        $var2a = 0;
        while($var3a = mysqli_fetch_array($var1a_lietkesp)){
            $var2a ++;
        ?>
        <tr>
            <td><?php echo $var2a ?></td>
            <td><?php echo $var3a['ma_sp'] ?></td>
            <td><?php echo $var3a['ten_sp'] ?></td>
            <td><img src="../img/upfile/<?php echo $var3a['pic_sp'] ?>" width="150px" style="padding:3px;" alt=""></td>
            <td><?php echo $var3a['gia_sp'] ?></td>
            <td><?php echo $var3a['thuonghieu_sp'] ?></td>
            <td><?php echo $var3a['baohanh_sp'] ?></td>
            <td><?php echo $var3a['size_sp'] ?></td>
            <td><?php echo $var3a['dochiunuoc_sp'] ?></td>
            <td><?php echo $var3a['nangluong_sp'] ?></td>
            <td>
                <a href="?action=quanlysanpham&query=suasp&id_sp=<?php echo $var3a['id_sp'] ?>">Sửa</a>|<a href="modules/quanlysanpham/xulysp.php?query=xoasp&id_sp=<?php echo $var3a['id_sp'] ?>">Xóa</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </form>
    </table>
</div>