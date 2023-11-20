<?php
session_start();
ob_start();
<<<<<<< HEAD
include "./views/header.php";
include_once "./models/pdo.php";
include_once "./models/tai_khoan.php";
include_once "./models/loai_phong.php";
include_once "./models/binh_luan.php";
=======
include "../nhanVien/views/header.php";
include_once "./models/pdo.php";
include_once "./models/tai_khoan.php";
include_once "./models/loai_phong.php";
// include_once "./models/binh_luan.php";
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
include_once "./models/phong.php";
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
            //tai khoan
<<<<<<< HEAD
        case 'dang_nhap':
            if (isset($_POST['dang_nhap'])) {
                $ten_tai_khoan = $_POST['ten_tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $tai_khoan = dang_nhap($ten_tai_khoan, $mat_khau);
                if ($tai_khoan == 0) {
                    $thong_bao = "TÀI KHOẢN HOẶC MẬT KHẨU KHÔNG ĐÚNG! VUI LÒNG ĐĂNG NHẬP LẠI";
                } else {
                    $vai_tro = $tai_khoan['vai_tro'];
                    if ($vai_tro == 0) {
                        $_SESSION['vai_tro'] = $vai_tro;
                        header('location:./hotel/index.php');
                    } elseif ($vai_tro == 1) {
                        $_SESSION['vai_tro'] = $vai_tro;
                        $_SESSION['ten_tai_khoan'] = $tai_khoan['ten_tai_khoan'];
                        $_SESSION['id_tai_khoan'] = $tai_khoan['id_tai_khoan'];
                        header('location:index.php');
                    } else {
                        $_SESSION['vai_tro'] = $vai_tro;
                        header('location:./nhanVien/index.php');
                    }
                }
            }
            include "./views/dangNhap.php";
            break;
        case 'dang_xuat':
            unset($_SESSION['ten_tai_khoan']);
            unset($_SESSION['vai_tro']);
            unset($_SESSION['id_tai_khoan']);
            header('location:index.php');
=======
        // case 'dang_nhap':
        //     if (isset($_POST['dang_nhap'])) {
        //         $ten_tai_khoan = $_POST['ten_tai_khoan'];
        //         $mat_khau = $_POST['mat_khau'];
        //         $tai_khoan = dang_nhap($ten_tai_khoan, $mat_khau);
        //         if ($tai_khoan == 0) {
        //             $thong_bao = "TÀI KHOẢN HOẶC MẬT KHẨU KHÔNG ĐÚNG! VUI LÒNG ĐĂNG NHẬP LẠI";
        //         } else {
        //             $vai_tro = $tai_khoan['vai_tro'];
        //             if ($vai_tro == 0) {
        //                 $_SESSION['vai_tro'] = $vai_tro;
        //                 header('location:./hotel/index.php');
        //             } elseif ($vai_tro == 1) {
        //                 $_SESSION['vai_tro'] = $vai_tro;
        //                 $_SESSION['ten_tai_khoan'] = $tai_khoan['ten_tai_khoan'];
        //                 $_SESSION['id_tai_khoan'] = $tai_khoan['id_tai_khoan'];
        //                 header('location:index.php');
        //             } else {
        //                 $_SESSION['vai_tro'] = $vai_tro;
        //                 header('location:./nhanVien/index.php');
        //             }
        //         }
        //     }
            // include "./views/dangNhap.php";
            // break;
        case 'log_out':
            unset($_SESSION['ten_tai_khoan']);
            unset($_SESSION['vai_tro']);
            unset($_SESSION['id_tai_khoan']);
            header("location:index.php");
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
            break;
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
            }
            include "./views/dangKi.php";
            break;
        case 'one_tai_khoan':
            if (isset($_GET['id'])) {
                $tai_khoan = list_one_tai_khoan($_GET['id']);
            }
<<<<<<< HEAD
            include "./views/list_tai_khoan.php";
=======
            include "./views/login/list_tai_khoan.php";
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
            break;
        case 'edit_tai_khoan':
            if (isset($_GET['id'])) {
                $tai_khoan = list_one_tai_khoan($_GET['id']);
            }
<<<<<<< HEAD
            include "./views/edit.php";
=======
            include "./views/login/edit.php";
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
            break;
        case 'update_tai_khoan':
            if (isset($_POST['update'])) {
                $id_tai_khoan = $_POST['id_tai_khoan'];
                $ten_tai_khoan = $_POST['ten_tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $anh_dai_dien = $_FILES['anh_dai_dien']['name'];
<<<<<<< HEAD
                $target_dir = "./upload/";
=======
                $target_dir = "../upload/";
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
                $target_file = $target_dir . basename($_FILES["anh_dai_dien"]["name"]);
                if (move_uploaded_file($_FILES["anh_dai_dien"]["tmp_name"], $target_file)) {
                }
                $vai_tro  = $_POST['vai_tro'];
                $trang_thai = $_POST['trang_thai'];
                update_tai_khoan($id_tai_khoan, $ten_tai_khoan, $mat_khau, $email, $sdt, $anh_dai_dien, $vai_tro, $trang_thai);
                $tai_khoan = list_one_tai_khoan($id_tai_khoan);
                $mess = "Thay Đổi Thông Tin Tài Khoản Thành Công";
            }
<<<<<<< HEAD
            include "./views/list_tai_khoan.php";
            break;
            //phong 
            case 'them_phong':
                $ten_loai_phong = show_loai_phong();
                $mess = ""; // Chuỗi thông báo để hiển thị kết quả thực hiện
                if (isset($_POST['add_room'])) {
                    $loai_phong = $_POST['loai_phong'];
                    $ten_phong = $_POST['ten_phong'];
                    $anh = $_FILES['anh']['name'];
                    $target_dir = "./uploads/"; // Đường dẫn thư mục lưu trữ ảnh
                    $target_file = $target_dir . basename($_FILES['anh']['name']);
                    // Kiểm tra và di chuyển tệp ảnh nếu người dùng chọn ảnh
                    if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                        // Gọi hàm để thêm phòng vào cơ sở dữ liệu
                        insert_room($loai_phong, $ten_phong, $anh, $_POST['suc_chua'], $_POST['gia_tien'], $_POST['trang_thai']);
                        $mess = "Thêm Phòng Thành Công";
                    } else {
                        $mess = "Lỗi khi tải lên ảnh";
                    }
                }
                // Include file view thêm phòng và hiển thị thông báo
                include "./views/phong/add.php";
                break;
            
            case 'sua_phong':
                $ten_loai_phong = show_loai_phong();
                $mess = ""; // Chuỗi thông báo để hiển thị kết quả thực hiện
                if (isset($_POST['edit_room'])) {
                    $id_phong = $_POST['id_phong'];
                    $loai_phong = $_POST['loai_phong'];
                    $ten_phong = $_POST['ten_phong'];
                    $anh = $_FILES['anh']['name'];
                    $target_dir = "./upload/";
                    $target_file = $target_dir . basename($_FILES['anh']['name']);
                    // Kiểm tra và di chuyển tệp ảnh nếu người dùng chọn ảnh mới
                    if (!empty($_FILES['anh']['name'])) {
                        if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                            // Cập nhật ảnh trong cơ sở dữ liệu
                            update_image($id_phong, $anh);
                        }
                    }
                    $suc_chua = $_POST['suc_chua'];
                    $gia_tien = $_POST['gia_tien'];
                    $trang_thai = $_POST['trang_thai'];
                    // Gọi hàm để cập nhật thông tin phòng trong cơ sở dữ liệu
                    update_room($id_phong, $loai_phong, $ten_phong, $suc_chua, $gia_tien, $trang_thai);
                    $mess = "Cập nhật Phòng Thành Công";
                }
                // Lấy thông tin phòng cần sửa từ cơ sở dữ liệu
                $id_phong_to_edit = $_GET['id'];
                $phong_to_edit = get_room_by_id($id_phong_to_edit);
                // Include file view sửa phòng và hiển thị dữ liệu hiện tại của phòng
                include "./views/phong/edit.php";
                break;
                case 'xoa_phong':
                    $mess = ""; // Chuỗi thông báo để hiển thị kết quả thực hiện
                    if (isset($_GET['id'])) {
                        $id_phong_to_delete = $_GET['id'];
                        // Gọi hàm để xóa phòng từ cơ sở dữ liệu
                        if (delete_room($id_phong_to_delete)) {
                            $mess = "Xoá phòng thành công";
                        } else {
                            $mess = "Lỗi khi xoá phòng";
                        }
                    }
                    // Hiển thị thông báo kết quả xoá
                    echo $mess;
                    break;
                    case 'danh_sachphong':
                        $ten_loai_phong = show_loai_phong(); // Giả sử hàm show_loai_phong trả về danh sách phòng từ cơ sở dữ liệu
                        $mess = ""; // Chuỗi thông báo để hiển thị kết quả thực hiện
                    
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Lấy ID phòng từ biểu mẫu
                            $id_loai_phong_selected = $_POST['idphong'];
                    
                            // Gọi hàm để lấy danh sách phòng dựa trên ID loại phòng được chọn
                            $danh_sach_phong = get_rooms_by_loai_phong($id_loai_phong_selected);
                        } else {
                            // Nếu không có POST request, hiển thị toàn bộ danh sách phòng
                            $danh_sach_phong = get_all_rooms();
                        }
                    
                        // Include file view danh sách phòng và hiển thị thông báo
                        include "./views/phong/list.php";
                        break;
=======

            include "./views/login/list_tai_khoan.php";
            break;
            //phong 
        case 'them_phong':
            $ten_loai_phong = show_loai_phong();
            if (isset($_POST['add_room'])) {
                $loai_phong = $_POST['loai_phong'];
                $ten_phong = $_POST['ten_phong'];
                $anh = $_FILES['anh']['name'];
                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['anh']['name']);
                if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                }
                $suc_chua = $_POST['suc_chua'];
                $gia_tien = $_POST['gia_tien'];
                $trang_thai = $_POST['trang_thai'];
                insert_room($loai_phong, $ten_phong, $anh, $suc_chua, $gia_tien, $trang_thai);
                $mess = "Thêm Phòng Thành Công";
            }
            include "./views/phong/add.php";
            break;
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
        case 'show_detail_room':
            if(isset($_GET['id'])){
                $phong_detail = show_room_detail($_GET['id']);
            }
            include  "./views/phong/chi_tiet.php";
            break;
        case 'show_phong':
            $phong = show_room();
<<<<<<< HEAD
            include './views/phong/home.php';
=======
            include '../nhanVien/views/phong/list.php';
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
            break;
        case 'binh_luan':
            if(isset($_POST['binh_luan'])){
                $chi_tiet_binh_luan = $_POST['chi_tiet_binh_luan'];
                $id_phong = $_POST['id_phong'];
                $id_tai_khoan = $_POST['id_tai_khoan'];
                $trang_thai = $_POST['trang_thai'];
                $date = date('Y-m-d H:i:s');
                insert_comment($chi_tiet_binh_luan, $id_phong,$id_tai_khoan,$date,$trang_thai);
                if(isset($_GET['id'])){
                    $phong_detail = show_room_detail($_GET['id']);
                }
                include "./views/room/chi_tiet.php";
            }
            break;
        case 'show_binh_luan':
            if(isset($_GET['id'])&& $_GET['id']>0){
                $id_phong = $_GET['id'];
            }
            else
            {
                $id_phong = 0;
            }
            $binh_luan = show_binh_luan($id_phong);
            
            include "./views/phong/show_comment.php";
            break;
    }
} else {
    $phong = show_room();
<<<<<<< HEAD
    include "./views/phong/home.php";
}
include "../views/footer.php";
=======
    include "../nhanVien/views/home.php";
}
include "../nhanVien/views/footer.php";
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
