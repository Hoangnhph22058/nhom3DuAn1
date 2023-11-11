<?php
include "./views/header.php";
include_once "models/pdo.php";
include_once "models/tai_khoan.php";
if(isset($_GET['act']) && ($_GET['act'] != '')){
$act=$_GET['act'];
    switch ($act){
        // case 'login':
        //     if(isset($_POST['login']) && ($_POST['login'])){
        //         $email = $_POST['email'];
        //         $mat_khau = $_POST['mat_khau'];
        //         $login = dang_nhap($email, $mat_khau);
        //         if($login != false){
        //             header('Location: index.php ');
        //         }
        //     }
        //     include "./views/dangNhap.php";
        //     break;
        // case 'register':
        //     if(isset($_POST['dang_ki']) && ($_POST['dang_ki'])){
        //         $ten_tai_khoan = $_POST['ten_tai_khoan'];
        //         $mat_khau = $_POST['mat_khau'];
        //         $email = $_POST['email'];
        //         $sdt = $_POST['sdt'];
        //         $anh_dai_dien = $_FILES['anh_dai_dien']['name'];
        //         $target_dir = "../upload/";
        //         $target_file = $target_dir.basename($_FILES['anh_dai_dien']['name']);
        //         if(move_uploaded_file($_FILES['anh_dai_dien']['tmp_name'], $target_file)){}
        //         $vai_tro = $_POST['vai_tro'];
        //         $trang_thai = $_POST['trang_thai'];
        //         dang_ki($ten_tai_khoan,$mat_khau,$email,$sdt,$anh_dai_dien,$vaitro,$trang_thai);
        //         $mess = "Thêm Tài Khoản Thành Công";
        //     }
        //     include "./views/dangKi.php";
    }
}
else
{
    include "./views/home.php";
}
include "./views/footer.php";
