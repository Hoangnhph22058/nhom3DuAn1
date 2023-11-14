<?php
function insert_room($id_loai_phong,$ten_phong,$anh,$suc_chua,$gia_tien,$trang_thai){
    $sql = "INSERT INTO `phong`(`id_loai_phong`, `ten_phong`, `anh`, `suc_chua`, `gia_tien`,`trang_thai`) VALUES ('$id_loai_phong', '$ten_phong', '$anh', '$suc_chua', '$gia_tien', '$trang_thai');";
    pdo_execute($sql);
}
function show_room(){
    $sql = "SELECT * FROM `phong`";
    $phong = pdo_query($sql);
    return $phong;
}
?>