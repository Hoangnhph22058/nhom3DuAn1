<?php 
function list_one_tai_khoan($id){
    $sql = "SELECT * FROM `tai_khoan` where `id_tai_khoan` = '$id'";
    $tai_khoan = pdo_query_one($sql);
    return $tai_khoan;
}
function update_tai_khoan($id_tai_khoan,$ten_tai_khoan,$mat_khau,$email,$sdt,$anh_dai_dien,$vai_tro,$trang_thai){
    if($anh_dai_dien!=""){
        // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `tai_khoan` SET `ten_tai_khoan` = '{$ten_tai_khoan}', `mat_khau` = '{$mat_khau}', `email` = '{$email}',`sdt` = '{$sdt}', `anh_dai_dien` = '{$anh_dai_dien}', `vai_tro` = '{$vai_tro}', `trang_thai` = '{$trang_thai}' WHERE `id_tai_khoan` = $id_tai_khoan";
    }else{
        //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql=  "UPDATE `tai_khoan` SET `ten_tai_khoan` = '{$ten_tai_khoan}', `mat_khau` = '{$mat_khau}', `email` = '{$email}',`sdt` = '{$sdt}',`vai_tro` = '{$vai_tro}', `trang_thai` = '{$trang_thai}' WHERE `id_tai_khoan` = $id_tai_khoan";
    }
    pdo_execute($sql);
}

?>