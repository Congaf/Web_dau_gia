<?php 
    $var1a_lietkehangsp = mysqli_query($mysqli,'SELECT * FROM tbl_hangsp ORDER BY id_hangsp ASC');
?>
<div class="content2">
    <h3>Các hãng sản phẩm</h3>
    <table id="banghangsp"  style="width:100%;  border:1px solid black;">
        <form action="modules/quanlyhangsanpham/xuly.php" method="POST">
        <tr>
            <th>Số TT</th>
            <th>Tên hãng</th>
            <th>Quản lý</th>
        </tr>
        <?php 
        $var2a = 0;
        while($var3a = mysqli_fetch_array($var1a_lietkehangsp)){
            $var2a ++;
        ?>
        <tr>
            <td><?php echo $var2a ?></td>
            <td><?php echo $var3a['hangsp_name'] ?></td>
            <td>
                <a href="?action=quanlyhangsanpham&query=suahangsp&idhangsp=<?php echo $var3a['id_hangsp'] ?>">Sửa</a>|<a href="modules/quanlyhangsanpham/xuly.php?query=xoahangsp&idhangsp=<?php echo $var3a['id_hangsp'] ?>">Xóa</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </form>
    </table>
</div>