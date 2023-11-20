<?php
session_start();
ob_start();
include "../views/header.php";
include_once "../models/pdo.php";
include_once "../models/tai_khoan.php";
 // Khởi động phiên làm việc

// Các mã PHP và nội dung trang khác ở đây...

// Bắt đầu phần xử lý cho case 'dang_nhap'
case 'dang_nhap':
    if (isset($_POST['dang_nhap'])) {
        $ten_tai_khoan = $_POST['ten_tai_khoan'];
        $mat_khau = $_POST['mat_khau'];

        // Thực hiện kiểm tra thông tin đăng nhập - đây là nơi để triệu gọi hàm dang_nhap
        $tai_khoan = dang_nhap($ten_tai_khoan, $mat_khau);

        if ($tai_khoan == 0) {
            $thong_bao = "TÀI KHOẢN HOẶC MẬT KHẨU KHÔNG ĐÚNG! VUI LÒNG ĐĂNG NHẬP LẠI";
        } else {
            $vai_tro = $tai_khoan['vai_tro'];
            if ($vai_tro == 0) {
                $_SESSION['vai_tro'] = $vai_tro;
                header('location: ./hotel/index.php');
            } elseif ($vai_tro == 1) {
                $_SESSION['vai_tro'] = $vai_tro;
                $_SESSION['ten_tai_khoan'] = $tai_khoan['ten_tai_khoan'];
                $_SESSION['id_tai_khoan'] = $tai_khoan['id_tai_khoan'];
                header('location: index.php');
            } else {
                $_SESSION['vai_tro'] = $vai_tro;
                header('location: ./nhanVien/index.php');
            }
        }
    
    include "./views/dangNhap.php";
    break;
// Kết thúc phần xử lý cho case 'dang_nhap'

// Các case khác và nội dung trang khác ở đây...



        case 'register':
            if (isset($_POST['dang_ki'])) {
                $ten_tai_khoan = $_POST['ten_tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $anh_dai_dien = $_FILES['anh_dai_dien']['name'];
                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['anh_dai_dien']['name']);
                if (move_uploaded_file($_FILES['anh_dai_dien']['tmp_name'], $target_file)) {
                }
                $vai_tro = $_POST['vai_tro'];
                $trang_thai = $_POST['trang_thai'];
                dang_ki($ten_tai_khoan, $mat_khau, $email, $sdt, $anh_dai_dien, $vai_tro, $trang_thai);
                $mess = "Thêm Tài Khoản Thành Công";
                // header('location: index.php?act=list_tai_khoan');
            include "./views/dangKi.php";
            break;
            }
include "./views/footer.php";
        }

