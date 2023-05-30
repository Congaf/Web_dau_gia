<?php 
    $sql_chitiet = "SELECT * FROM tbl_sanphamhang2 WHERE id_sp =  '$_GET[id]'";
    $var1a_hienthi = mysqli_query($mysqli,$sql_chitiet);
    while($var2b = mysqli_fetch_array($var1a_hienthi)){
?>
<section class="category">
        <div class="item "> 
            
            <div class="item-content-top row">
                <div class="item-content-top-left">
                    <img src="img/upfile_hang2/<?php echo $var2b['pic_sp'] ?>" alt="Hình ảnh đồng hồ">
                </div>
                <div class="item-content-top-right">
                    <p class="name-item"><?php echo $var2b['ten_sp'] ?></p>
                    
                    <div class="inside row">
                        
                        <div class="inside-left">
                            <div class="price-1 row">
                                <div class="p-1 left">
                                    <p>Giá bán gốc:</p>
                                    <span class="price"><?php echo number_format($var2b['gia_sp']).'vnđ' ?></span>
                                </div>
                                <div class="p-1 middle">
                                    <p>Khởi điểm:</p>
                                    <span class="price"><?php echo number_format($var2b['gia_sp']*0.5).'vnđ' ?> đ</span>
                                </div>
                                <div class="p-1 right">
                                    <p>Bước giá:</p>
                                    <span class="price">100.000 đ</span>
                                </div>
                            </div>
                            <div class="price-2 row">
                                <div class="p-2">
                                    <p>Giá hiện tại</p>
                                    <span style="font-weight: bold; color: red; font-size: 20px;">5.364.000 đ</span>
                                </div>
                                <div class="p-2" style="margin-left: 5%;">
                                    <p><i class="fas fa-award"></i>Người thắng</p>
                                    <span style="font-weight: bold; color: red; font-size: 20px;" class="winner">Some one</span>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        
                        <div class="indside-right">
                            <p style="font-weight: bold; color: red; font-size: 30px; margin-left: 17%;" id="time-countdown"></p>
                            <div class="boxStep">
                                <button id="step">-</button>
                                <span class="setPrice">
                                    <input class="cssInput" type="text" id="currentPrice" value="5.364.000 đ" readonly>
                                </span>
                                <button id="step">+</button>
                            </div>
                            <button class="submit-btn">
                                <p><i class="fas fa-gavel"></i> ĐẤU GIÁ NGAY</p>
                                <span>Giảm giá tới 70% thị trường</span>
                            </button>
                        </div>
                    </div>

                    <div class="info-side">
                        <div>
                            <table style="font-weight: bold;" class="table-1">
                                <tr>
                                    <td>Mã sản phẩm:</td>
                                    <td><?php echo $var2b['ma_sp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Thương hiệu:</td>
                                    <td><?php echo $var2b['thuonghieu_sp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Bảo hành:</td>
                                    <td><?php echo $var2b['baohanh_sp'].'_năm' ?></td>
                                </tr>
                                <tr>
                                    <td>Đường kính mặt:</td>
                                    <td><?php echo $var2b['size_sp'].'mm' ?></td>
                                </tr>
                                <tr>
                                    <td>Độ chịu nước:</td>
                                    <td><?php echo $var2b['dochiunuoc_sp'].'ATM' ?></td>
                                </tr>
                                <tr>
                                    <td>Năng lượng sử dụng:</td>
                                    <td><?php echo $var2b['nangluong_sp'] ?></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
<?php } ?>
            <div class="item-content-bottom row">
                <div class="last-content-left">
                    <p>HƯỚNG DẪN ĐẤU GIÁ</p>
                    <span>Hướng dẫn đấu giá đang được cập nhật.</span>
                </div>
            </div>
        </div>
    </section>