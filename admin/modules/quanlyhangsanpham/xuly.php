<?php 
include("../../config/config.php");
$tenhang = $_POST['tenhang'];
if(isset($_POST['themhang'])){
    $sql_them = "INSERT INTO tbl_hangsp(hangsp_name) VALUES ('".$tenhang."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlyhangsanpham&query=themhangsp');
}elseif (isset($_POST['suahang'])) {
    $sql_sua = "UPDATE tbl_hangsp SET hangsp_name='".$tenhang."' WHERE id_hangsp = '$_GET[idhangsp]'";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlyhangsanpham&query=themhangsp');
}elseif (isset($_GET['query'])== 'xoahangsp') {
    $idxoa = $_GET['idhangsp'];
    $sql_xoa = "DELETE FROM tbl_hangsp WHERE id_hangsp = '".$idxoa."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlyhangsanpham&query=themhangsp');
}

?>