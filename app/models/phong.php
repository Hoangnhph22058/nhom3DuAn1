<?php
function insert_room($loai_phong,$ten_phong,$anh,$suc_chua,$gia_tien,$trang_thai){
    $sql = "INSERT INTO `phong`(`loai_phong`, `ten_phong`, `anh`, `suc_chua`, `gia_tien`,`trang_thai`) VALUES ('$loai_phong', '$ten_phong', '$anh', '$suc_chua', '$gia_tien', '$trang_thai');";
    pdo_execute($sql);
}
function insert_image_detai($id_phong,$img){
    $sql = "INSERT INTO `img_chi_tiet_phong`(`id_phong`, `img`) VALUES ('$id_phong', '$img');";
    pdo_execute($sql);
}
function show_room(){
    $sql = "SELECT * FROM `phong`";
    $phong = pdo_query($sql);
    return $phong;
}
function show_room_detail($id){
    $sql = "SELECT * FROM `phong` where `id_phong` = '$id'";
    $phong_detail = pdo_query_one($sql);
    return $phong_detail;
}
