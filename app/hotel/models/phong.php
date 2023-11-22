<?php
function insert_room($ten_phong,$id_loai_phong, $anh, $suc_chua,$chi_tiet_phong, $gia_tien, $trang_thai){
    $sql = "INSERT INTO `phong`(`ten_phong`, `id_loai_phong`, `anh`, `suc_chua`, `chi_tiet_phong`, `gia_tien`, `trang_thai`) VALUES ('$ten_phong', '$id_loai_phong', '$anh', '$suc_chua', '$chi_tiet_phong', '$gia_tien', '$trang_thai');";
    pdo_execute($sql);
}
function show_room(){
    $sql = "SELECT * FROM `phong`";
    $phong = pdo_query($sql);
    return $phong;
}
function update_trang_thai_phong($id,$trang_thai){
    $sql=  "UPDATE `phong` SET `trang_thai` = '{$trang_thai}' WHERE `id_phong` = $id";
    pdo_execute($sql);
}
function show_one_phong($id){
    $sql = "SELECT * FROM `phong` where `id_phong` = '$id'";
    $phong = pdo_query_one($sql);
    return $phong;
}
function update_phong($id_phong,$ten_phong,$id_loai_phong,$anh,$suc_chua,$chi_tiet_phong,$gia_tien){
    if($anh!=""){
        // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `phong` SET `ten_phong` = '{$ten_phong}', `id_loai_phong` = '{$id_loai_phong}', `anh` = '{$anh}', `suc_chua` = '{$suc_chua}', `chi_tiet_phong` = '{$chi_tiet_phong}', `gia_tien` = '{$gia_tien}' WHERE `id_phong` = $id_phong";
    }else{
        //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql=  "UPDATE `phong` SET `ten_phong` = '{$ten_phong}', `id_loai_phong` = '{$id_loai_phong}', `suc_chua` = '{$suc_chua}', `chi_tiet_phong` = '{$chi_tiet_phong}', `gia_tien` = '{$gia_tien}' WHERE `id_phong` = $id_phong";
    }
    pdo_execute($sql);
}
?>