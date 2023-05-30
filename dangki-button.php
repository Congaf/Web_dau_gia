<?php
    include("admin/config/config.php");
    // echo $_POST["phone"];
    if( isset($_POST["button"]) ){
        // gán giá trị biến(dòng 6 đến 9)
        $phone = $_POST["phone"]; 
        $hoten = $_POST["hoten"];
        $matkhau = $_POST["matkhau"];
        $nhaplaimatkhau = $_POST["nhaplaimatkhau"];
        if($phone == ""|| $hoten == ""|| $matkhau=="" || $nhaplaimatkhau==""){
            header("location:dangki.php");
        }
        else{
            if( $matkhau != $nhaplaimatkhau){
                header("location:dangki.php");
            }
            else{
            $sql = "select * from tbl_user where  phone = '".$phone."'";
            $old = mysqli_query($mysqli,$sql);
            $matkhaudamahoa = md5($matkhau);
            //  echo (string)$old;
            if( mysqli_num_rows($old) > 0 ) {
                header("location:dangki.php");
            }
            else{
                $sql = "INSERT INTO tbl_user( phone,hoten,matkhau) VALUE ('".$phone."','".$hoten."','".$matkhau."') ";
                mysqli_query($mysqli,$sql);
                header("location:index-logged.php");
            }
        }
    }
    }

?>