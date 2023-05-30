<div class="main">
<div class="content1" >
    <h3>Thêm sản phẩm:</h3>
    <table id="bangthemhangsp">
        <form method="POST" action="Item/themsanpham/xulythemsanpham.php" enctype="multipart/form-data">
            <tbody>
                <tr>
                    <td>Mã sản phẩm:</td>
                    <td><input type="text" name="ma_sp" ></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm:</td>
                    <td><input type="text" name="ten_sp" ></td>
                </tr>
                <tr>
                    <td>Hình ảnh:</td>
                    <td><input type="file" name="pic_sp" ></td>
                </tr>
                <tr>
                    <td>Giá bán:</td>
                    <td><input type="text" name="gia_sp" ></td>
                </tr>
                <tr>
                    <td>Thương hiệu:</td>
                    <td><input type="text" name="thuonghieu_sp" ></td>
                </tr>
                <tr>
                    <td>Bảo hành:</td>
                    <td><input type="text" name="baohanh_sp" ></td>
                </tr>
                <tr>
                    <td>Đường kính mặt:</td>
                    <td><input type="text" name="size_sp" ></td>
                </tr>
                <tr>
                    <td>Độ chịu nước:</td>
                    <td><input type="text" name="dochiunuoc_sp" ></td>
                </tr>
                <tr>
                    <td>Năng lượng:</td>
                    <td><input type="text" name="nangluong_sp" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="themsanpham" type="submit" value="Thêm" style="width:100%; text-align:center; margin-top:7px; font-weight: bold; font-size: 20px;"></td>
                </tr>
            </tbody>
        </form>
    </table>
</div>
</div>