<?php
session_start();
ob_start();

include "../hotel/views/header.php";
include_once "./models/pdo.php";
include_once "./models/loai_phong.php";
include_once "./models/tai_khoan.php";
include_once "./models/binh_luan.php";
include_once "./models/phong.php";
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
            //tai khoan
        case 'log_out':
            unset($_SESSION['ten_tai_khoan']);
            unset($_SESSION['vai_tro']);
            unset($_SESSION['id_tai_khoan']);
            header("location:index.php");
            break;

        case 'one_tai_khoan':
            if (isset($_GET['id'])) {
                $tai_khoan = list_one_tai_khoan($_GET['id']);
            }
            include "./views/login/list_tai_khoan.php";
            break;
        case 'edit_tai_khoan':
            if (isset($_GET['id'])) {
                $tai_khoan = list_one_tai_khoan($_GET['id']);
            }
            include "./views/login/edit.php";
            break;
        case 'update_tai_khoan':
            if (isset($_POST['update'])) {
                $id_tai_khoan = $_POST['id_tai_khoan'];
                $ten_tai_khoan = $_POST['ten_tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $anh_dai_dien = $_FILES['anh_dai_dien']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh_dai_dien"]["name"]);
                if (move_uploaded_file($_FILES["anh_dai_dien"]["tmp_name"], $target_file)) {
                }
                $vai_tro  = $_POST['vai_tro'];
                $trang_thai = $_POST['trang_thai'];
                update_tai_khoan($id_tai_khoan, $ten_tai_khoan, $mat_khau, $email, $sdt, $anh_dai_dien, $vai_tro, $trang_thai);
                $tai_khoan = list_one_tai_khoan($id_tai_khoan);
                $mess = "Thay Đổi Thông Tin Tài Khoản Thành Công";
            }
            include "./views/login/list_tai_khoan.php";
            break;
            //loai phong
        case 'show_loai_phong':
            $loai_phong = show_loai_phong();
            include "./views/loai_phong/list.php";
            break;
        case 'add_loai_phong':
            if (isset($_POST['add'])) {
                $ten_loai_phong = $_POST['ten_loai_phong'];
                $anh_loai_phong = $_FILES['anh_loai_phong']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anh_loai_phong']['name']);
                if (move_uploaded_file($_FILES['anh_loai_phong']['tmp_name'], $target_file)) {
                }
                $chi_tiet_loai_phong = $_POST['chi_tiet_loai_phong'];
                $trang_thai = 0;
                insert_loai_phong($ten_loai_phong, $anh_loai_phong, $chi_tiet_loai_phong, $trang_thai);
                header("Location: index.php?act=show_loai_phong");
            }
            include "./views/loai_phong/add.php";
            break;
        case 'edit_loai_phong':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $one_loai_phong = show_one_loai_phong($_GET['id']);
            }
            include "./views/loai_phong/edit.php";
            break;
        case 'update_loai_phong':
            if (isset($_POST['update'])) {
                $id = $_POST['id_loai_phong'];
                $ten_loai_phong = $_POST['ten_loai_phong'];
                $anh_loai_phong = $_FILES['anh_loai_phong']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anh_loai_phong']['name']);
                if (move_uploaded_file($_FILES['anh_loai_phong']['tmp_name'], $target_file)) {
                }
                $chi_tiet_loai_phong = $_POST['chi_tiet_loai_phong'];
                update_loai_phong($id, $ten_loai_phong, $anh_loai_phong, $chi_tiet_loai_phong);
                header("location:index.php?act=show_loai_phong");
            }
        case 'ngung_hoat_dong':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $trang_thai = 1;
                update_trang_thai($_GET['id'], $trang_thai);
                header("location:index.php?act=show_loai_phong");
            }
            break;
        case 'khoi_phuc_hoat_dong':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $trang_thai = 0;
                update_trang_thai($_GET['id'], $trang_thai);
                header("location:index.php?act=show_loai_phong");
            }
            break;
        case 'delete':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_loai_phong($_GET['id']);
                header("location:index.php?act=show_loai_phong");
            }
            break;
            //phong 
        case 'add_phong':
            $ten_loai_phong = show_loai_phong();
            if (isset($_POST['add'])) {
                $ten_phong = $_POST['ten_phong'];
                $id_loai_phong = $_POST['id_loai_phong'];
                $anh = $_FILES['anh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anh']['name']);
                if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                }
                $suc_chua = $_POST['suc_chua'];
                $chi_tiet_phong = $_POST['chi_tiet_phong'];
                $gia_tien = $_POST['gia_tien'];
                $trang_thai = $_POST['trang_thai'];
                insert_room($ten_phong, $id_loai_phong, $anh, $suc_chua, $chi_tiet_phong, $gia_tien, $trang_thai);
                $mess = "Thêm Phòng Thành Công";
                header("location:index.php?act=show_phong");
            }
            include "./views/phong/add.php";
            break;
        case 'ngung_phong':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $trang_thai = 1;
                update_trang_thai_phong($_GET['id'], $trang_thai);
                header("location:index.php?act=show_phong");
            }
            break;
        case 'khoi_phuc_phong':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $trang_thai = 0;
                update_trang_thai_phong($_GET['id'], $trang_thai);
                header("location:index.php?act=show_phong");
            }
            break;
            // case 'delete_phong':
            //     if (isset($_GET['id']) && ($_GET['id']) > 0) {
            //         delete_phong($_GET['id']);
            //         header("location:index.php?act=show_phong");
            //     }
            //     break;
            // case 'show_detail_room':
            //     if (isset($_GET['id'])) {
            //         $phong_detail = show_room_detail($_GET['id']);
            //     }
            //     include  "./views/phong/chi_tiet.php";
            //     break;
        case 'show_phong':
            $phong = show_room();
            // $loai_phong = show_one_loai_phong();
            include '../hotel/views/phong/list.php';
            break;
        case 'edit_phong':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $one_phong = show_one_phong($_GET['id']);
                $id_loai_phong = $one_phong['id_loai_phong'];
                $loai_phong = show_loai_phong();
            }
            include "./views/phong/edit.php";
            break;
        case 'update_phong':
            if (isset($_POST['update'])) {
                $id_phong = $_POST['id_phong'];
                $ten_phong = $_POST['ten_phong'];
                $id_loai_phong = $_POST['id_loai_phong'];
                $anh = $_FILES['anh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anh']['name']);
                if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                }
                $suc_chua = $_POST['suc_chua'];
                $chi_tiet_phong = $_POST['chi_tiet_phong'];
                $gia_tien = $_POST['gia_tien'];
                update_phong($id_phong, $ten_phong, $id_loai_phong, $anh, $suc_chua, $chi_tiet_phong, $gia_tien);
                header("location:index.php?act=show_phong");
            }
            break;
            // case 'binh_luan':
            //     if(isset($_POST['binh_luan'])){
            //         $chi_tiet_binh_luan = $_POST['chi_tiet_binh_luan'];
            //         $id_phong = $_POST['id_phong'];
            //         $id_tai_khoan = $_POST['id_tai_khoan'];
            //         $trang_thai = $_POST['trang_thai'];
            //         $date = date('Y-m-d H:i:s');
            //         insert_comment($chi_tiet_binh_luan, $id_phong,$id_tai_khoan,$date,$trang_thai);
            //         if(isset($_GET['id'])){
            //             $phong_detail = show_room_detail($_GET['id']);
            //         }
            //         include "./views/room/chi_tiet.php";
            //     }
            //     break;
        case 'show_binh_luan':
            $binh_luan = show_binh_luan();
            include "./views/comment/list.php";
            break;
            case 'ngung_phong':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $trang_thai = 1;
                    update_trang_thai_phong($_GET['id'], $trang_thai);
                    header("location:index.php?act=show_phong");
                }
                break;
        case 'delete_binh_luan':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_binh_luan($_GET['id']);
                header("location:index.php?act=show_binh_luan");
            }
            break;
    }
} else {
    // $phong = show_room();
    include "../hotel/views/phong/home.php";
}
include "../hotel/views/footer.php";
