<?php 
include("../../config/config.php");
$ma_sp = $_POST['ma_sp'];
$ten_sp = $_POST['ten_sp'];
//upload ảnh
$errors= array();
$pic_sp_name = $_FILES['pic_sp']['name'];
$pic_sp_tmp = $_FILES['pic_sp']['tmp_name'];
$pic_sp_type = $_FILES['pic_sp']['type'];
$pic_sp_parts =explode('.',$_FILES['pic_sp']['name']);
$pic_sp_ext=strtolower(end($pic_sp_parts));
$expensions= array("jpeg","jpg","png");

//
$gia_sp = $_POST['gia_sp'];
$thuonghieu_sp = $_POST['thuonghieu_sp'];
$baohanh_sp = $_POST['baohanh_sp'];
$size_sp = $_POST['size_sp'];
$dochiunuoc_sp = $_POST['dochiunuoc_sp'];
$nangluong_sp = $_POST['nangluong_sp'];
if(isset($_POST['themsp'])){
    if(in_array($pic_sp_ext,$expensions)=== false){
        $errors[]= "Chỉ hỗ trợ upload file JPEG , JPG và PNG.";
    }
    $pic_sp = $_FILES['pic_sp']['name'];
    $location_upload = "../../../img/upfile/".basename($pic_sp);
    $sql_them = "INSERT INTO tbl_sanpham(ma_sp,ten_sp,pic_sp,gia_sp,thuonghieu_sp,baohanh_sp,size_sp,dochiunuoc_sp,nangluong_sp
    ) VALUES ('".$ma_sp."','".$ten_sp."','".$pic_sp."','".$gia_sp."','".$thuonghieu_sp."','".$baohanh_sp."','".$size_sp."','".$dochiunuoc_sp."','".$nangluong_sp."')";
     mysqli_query($mysqli,$sql_them);
    move_uploaded_file($_FILES['pic_sp']['tmp_name'], $location_upload );
    header('Location:../../index.php?action=quanlysanpham&query=themsp');
}elseif (isset($_POST['suasp'])) {
    $sql_sua = "UPDATE tbl_sanpham SET ma_sp='".$ma_sp."',ten_sp='".$ten_sp."',pic_sp='".$pic_sp."',gia_sp='".$gia_sp."',thuonghieu_sp='".$thuonghieu_sp."',baohanh_sp='".$baohanh_sp."',size_sp='".$size_sp."',dochiunuoc_sp='".$dochiunuoc_sp."',nangluong_sp='".$nangluong_sp."' WHERE id_sp = '$_GET[id_sp]' ";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlysanpham&query=themsp');
}elseif (isset($_GET['query'])== 'xoasp') {
    $idxoa = $_GET['id_sp'];
    $sql_xoa_pic = " SELECT * FROM tbl_sanpham WHERE id_sp = '".$idxoa."' LIMIT 1";
    $query_xoa_pic = mysqli_query($mysqli,$sql_xoa_pic);
    while ($var1 = mysqli_fetch_array($query_xoa_pic)) {
        unlink('../../../img/upfile/'.$var1['pic_sp']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sp = '".$idxoa."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=themsp');
}

?>