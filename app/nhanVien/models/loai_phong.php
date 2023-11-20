<?php
function loai_phong(){
    $sql="INSERT INTO `loai_phong` (`id_loai_phong`, `ten_loai_phong`, `anh_loai_phong`, `chi_tiet_loai_phong`, `trang_thai`) VALUES (NULL, '$ten_loai_phong', '$anh_loai_phong', '$chi_tiet_loai_phong', '$trang_thai')";
    $listloaiphong=pdo_query($sql);
    return  $listloaiphong;
}
function loai_phong($idloai_phong){
    if($idloai_phong>0){
        $sql="select * from loai_phong where id=".$idloai_phong;
        $loai_phong=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}