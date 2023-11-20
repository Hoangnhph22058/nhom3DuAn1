<?php

function show_binh_luan($id_phong){
    $sql = "
    SELECT binh_luan.id_binh_luan, binh_luan.chi_tiet_binh_luan, tai_khoan.ten_tai_khoan, binh_luan.thoi_gian_binh_luan FROM `binh_luan` 
    LEFT JOIN tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id_tai_khoan
    LEFT JOIN phong ON binh_luan.id_phong = phong.id_phong
    WHERE phong.id_phong = $id_phong;
";
    $binh_luan = pdo_query($sql);
    return $binh_luan;
}
function insert_comment($chi_tiet_binh_luan, $id_phong,$id_tai_khoan,$date,$trang_thai){
    $sql = "INSERT INTO `binh_luan` (`chi_tiet_binh_luan`, `id_phong`, `id_tai_khoan`, `thoi_gian_binh_luan`, `trang_thai`) VALUES ('$chi_tiet_binh_luan','$id_phong','$id_tai_khoan','$date','$trang_thai');";
    pdo_execute($sql);
}
?>