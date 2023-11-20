<?php
// Kết nối CSDL
$servername = "localhost";
$username = "root ";
$password = " ";
$dbname = "du_an_1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lỗi để báo lỗi nếu có
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Truy vấn dữ liệu từ bảng binh_luan
    $sql = "SELECT * FROM binh_luan WHERE trang_thai = 'đã_xác_nhận'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Hiển thị kết quả
    if ($stmt->rowCount() > 0) {
        foreach ($result as $row) {
            echo "ID Bình luận: " . $row["id_binh_luan"] . "<br>";
            echo "Chi tiết bình luận: " . $row["chi_tiet_binh_luan"] . "<br>";
            echo "ID Phòng: " . $row["id_phong"] . "<br>";
            echo "ID Tài khoản: " . $row["id_tai_khoan"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Không có bình luận nào.";
    }
} catch (PDOException $e) {
    echo "Lỗi kết nối CSDL: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>
