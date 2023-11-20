<?php
    session_start();
    
    //dang ky
    function insert_taikhoan($email,$user,$pass){
        $sql=" INSERT INTO `tai_khoan` (`id_tai_khoan`, `ten_tai_khoan`, `mat_khau`, `email`, `sdt`,`anh_dai_dien`, `vai_tro`, `id_don_hang`, `trang_thai`) VALUES (NULL, '$ten_tai_khoan', '$mat_khau', '$email', '$sdt', '$anh_dai_dien', '$vai_tro', '$id_dơn_hang', '$trang_thai')";
        pdo_execute($sql);
    }

    function dangnhap($user,$pass) {
        $sql="SELECT * FROM tai_khoan WHERE ten_tai_khoan='$ten_tai_khoan' and mat_khau='$mat_khau'";
        $tai_khoan = pdo_query_one($sql);

        if ($tai_khoan != false) {
            $_SESSION['ten_tai_khoan'] = $ten_tai_khoan;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    
?>