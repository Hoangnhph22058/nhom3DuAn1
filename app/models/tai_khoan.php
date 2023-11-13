<?php
// session_start();
function dang_nhap($email, $mat_khau){
    $sql = "SELECT * FROM tai_khoan WHERE email='$email' and mat_khau='$mat_khau'";
    $tai_khoan = pdo_query_one($sql);
    // var_dump($tai_khoan);die;
    if($tai_khoan != false ){
        $_SESSION['ten_tai_khoan'] = $email;
    }
    else 
    {
        return "Thông tin đăng nhập sai vui lòng đăng nhập lại";
    }
}
function dang_ki($ten_tai_khoan,$mat_khau,$email,$sdt,$anh_dai_dien,$vai_tro,$trang_thai){
    $sql ="INSERT INTO `tai_khoan` ( `ten_tai_khoan`, `mat_khau`, `email`, `sdt`, `anh_dai_dien`, `vai_tro`, `trang_thai`) VALUES ( '$ten_tai_khoan', '$mat_khau','$email','$sdt','$anh_dai_dien','$vai_tro','$trang_thai'); ";
    pdo_execute($sql);
}
function list_tai_khoan(){
        $sql = "SELECT * FROM `tai_khoan`";
        $list_tai_khoan = pdo_query($sql);
        return $list_tai_khoan;
}

?>