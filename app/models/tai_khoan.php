<?php
session_start();
function dang_nhap($email, $mat_khau){
    $sql = "SELECT * FROM tai_khoan WHERE email='$email' and mat_khau='$mat_khau'";
    $tai_khoan = pdo_query_one($sql);
    if($tai_khoan != false ){
        $_SESSION['ten_tai_khoan'] = $tai_khoan['ten_tai_khoan'];
    }
    else 
    {
        return "Tài Khoản không tồn tại vui lòng đăng nhập lại";
    }
}
function dang_ki($ten_tai_khoan,$mat_khau,$email,$sdt,$anh_dai_dien,$vaitro,$trang_thai){
    $sql ="INSERT INTO `tai_khoan` ( `ten_tai_khoan`, `mat_khau`, `email`, `sdt`, `anh_dai_dien`, `vaitro`, `trang_thai`) VALUES ( '$ten_tai_khoan', '$mat_khau','$email','$sdt','$anh_dai_dien','$vaitro','$trang_thai'); ";
    pdo_execute($sql);
}
?>