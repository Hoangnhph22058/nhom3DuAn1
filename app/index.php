<?php
include "./views/header.php";
include_once "./models/pdo.php";
include_once "./models/tai_khoan.php";
include_once "./models/loai_phong.php";
include_once "./models/phong.php";
if(isset($_GET['act']) && ($_GET['act'] != '')){
$act=$_GET['act'];
    switch ($act){
        case 'dang_nhap':
            if(isset($_POST['dang_nhap'])){
                $email = $_POST['email'];
                $mat_khau = $_POST['mat_khau'];
                $mess = dang_nhap($email,$mat_khau);
                header('location: index.php');
            }
            include "./views/dangNhap.php";
            break;
        case 'register':
            if(isset($_POST['dang_ki'])){
                $ten_tai_khoan = $_POST['ten_tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $anh_dai_dien = $_POST['anh_dai_dien'];
                $vai_tro = $_POST['vai_tro'];
                $trang_thai = $_POST['trang_thai'];
                dang_ki($ten_tai_khoan,$mat_khau,$email,$sdt,$anh_dai_dien,$vai_tro,$trang_thai);
                $mess = "Thêm Tài Khoản Thành Công";
                // header('location: index.php?act=list_tai_khoan');
            }
            include "./views/dangKi.php";
            break;
        case 'list_tai_khoan':
            $list_tai_khoan = list_tai_khoan();
            include "./views/list_tai_khoan.php";
            break;
        case 'them_phong':
            $ten_loai_phong = show_loai_phong();
            if(isset($_POST['add_room'])){
            $id_loai_phong = $_POST['loai_phong'];
            $ten_phong=$_POST['ten_phong'];
            $anh = $_FILES['anh']['name'];
            $target_dir = "./upload/";
            $target_file = $target_dir.basename($_FILES['anh']['name']);
            if(move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)){}
            $suc_chua = $_POST['suc_chua'];
            $gia_tien = $_POST['gia_tien'];
            $trang_thai = $_POST['trang_thai'];
            insert_room($id_loai_phong,$ten_phong,$anh,$suc_chua,$gia_tien,$trang_thai);
            $mess = "Thêm Phòng Thành Công";
            }
            include "./views/room/add.php";
            break;
           
    }
    }
    else
    {
        include "./views/home.php";
    }
    include "./views/footer.php";
