<?php
function show_binh_luan(){
    // $sql = "SELECT * FROM binh_luan";
    $sql = "
    SELECT binh_luan.id_binh_luan, binh_luan.chi_tiet_binh_luan, tai_khoan.ten_tai_khoan,phong.ten_phong, binh_luan.thoi_gian_binh_luan, binh_luan.trang_thai FROM `binh_luan` 
    LEFT JOIN tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id_tai_khoan
    LEFT JOIN phong ON binh_luan.id_phong = phong.id_phong
   
";
    $binh_luan = pdo_query($sql);
    return $binh_luan;
}
function delete_binh_luan($id){
    $sql = "DELETE FROM `binh_luan` WHERE `id_binh_luan` = $id";
    pdo_execute($sql);
}

?>