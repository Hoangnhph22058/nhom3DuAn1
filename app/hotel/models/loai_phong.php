<?php 
function show_loai_phong(){
    $sql = "SELECT * FROM `loai_phong`";
    $loai_phong = pdo_query($sql);
    return $loai_phong;
}
function insert_loai_phong($ten_loai_phong,$anh_loai_phong,$chi_tiet_loai_phong,$trang_thai){
    $sql = "INSERT INTO `loai_phong`(`ten_loai_phong`, `anh_loai_phong`, `chi_tiet_loai_phong`, `trang_thai`) VALUES ('$ten_loai_phong', '$anh_loai_phong', '$chi_tiet_loai_phong', '$trang_thai');";
    pdo_execute($sql);
}
function update_trang_thai($id,$trang_thai){
    $sql=  "UPDATE `loai_phong` SET `trang_thai` = '{$trang_thai}' WHERE `id_loai_phong` = $id";
    pdo_execute($sql);
}
function show_one_loai_phong($id){
    $sql = "SELECT * FROM `loai_phong` where `id_loai_phong` = '$id'";
    $loai_phong = pdo_query_one($sql);
    return $loai_phong;
}
function update_loai_phong($id,$ten_loai_phong,$anh_loai_phong,$chi_tiet_loai_phong){
    if($anh_loai_phong!=""){
        // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `loai_phong` SET `ten_loai_phong` = '{$ten_loai_phong}', `anh_loai_phong` = '{$anh_loai_phong}', `chi_tiet_loai_phong` = '{$chi_tiet_loai_phong}' WHERE `id_loai_phong` = $id";
    }else{
        //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql=  "UPDATE `loai_phong` SET `ten_loai_phong` = '{$ten_loai_phong}', `chi_tiet_loai_phong` = '{$chi_tiet_loai_phong}' WHERE `id_loai_phong` = $id";
    }
    pdo_execute($sql);
}
function delete_loai_phong($id){
    $sql = "DELETE FROM `loai_phong` WHERE `id_loai_phong` = $id";
    pdo_execute($sql);
}
?>