<?php
// Kết nối database và các thông số khác

// Lấy thông tin phòng cần xoá
$id_phong = $_GET['id']; // Assume id của phòng được truyền qua từ danh sách

$sql = "DELETE FROM phong WHERE id_phong = $id_phong";

if ($conn->query($sql) === TRUE) {
    echo "Xoá phòng thành công";
} else {
    echo "Lỗi: " . $conn->error;
}
?>
