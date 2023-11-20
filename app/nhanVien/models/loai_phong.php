<?php

function show_loai_phong(){
    $sql = "SELECT * FROM `loai_phong`";
    $ten_loai_phong = pdo_query($sql);
    return $ten_loai_phong;
}

?>
