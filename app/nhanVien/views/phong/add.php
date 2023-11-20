<<<<<<< HEAD

=======
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
<form action="index.php?act=them_phong" enctype="multipart/form-data" method="post">
    <select name="loai_phong">
        <?php foreach($ten_loai_phong as $item){
            extract($item);
        echo '<option value="'.$id_loai_phong.'">'.$ten_loai_phong.'</option>';
         } ?>
    </select><br>
<<<<<<< HEAD
    <label>Tên Phòng</label>
    <input type="text" name="ten_phong" value="">
    <br><label>Ảnh</label>
    <input type="file" name="anh">
    <br><label>Sức Chứa</label>
    <input type="number" name="suc_chua">
    <br><label>Giá Tiền</label>
    <input type="number" name="gia_tien">
    <br><label>Trạng Thái</label>
=======
    <label>ten phong</label>
    <input type="text" name="ten_phong" value="">
    <br><label>anh</label>
    <input type="file" name="anh">
    <br><label>suc chua</label>
    <input type="number" name="suc_chua">
    <br><label>gia tien</label>
    <input type="number" name="gia_tien">
    <br><label>trang thai</label>
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
    <select name="trang_thai" >
        <option value="0">Trống</option>
        <option value="1">Đã đặt</option>
    </select>
<<<<<<< HEAD
    <button type="submit" name="add_room" >ADD</button>
</form>
<?php
//thêm phòng
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_room"])) {
    $loai_phong = $_POST['loai_phong'];
    $ten_phong = $_POST['ten_phong'];
    $anh = $_FILES['anh']['name'];
    $suc_chua = $_POST['suc_chua'];
    $gia_tien = $_POST['gia_tien'];
    $trang_thai = $_POST['trang_thai'];
    // Xử lý upload ảnh
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
    move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
    $sql = "INSERT INTO phong (id_loai_phong, ten_phong, anh, suc_chua, gia_tien, trang_thai) 
            VALUES ('$loai_phong', '$ten_phong', '$anh', $suc_chua, $gia_tien, '$trang_thai')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm phòng thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>
=======
    <button type="submit" name="add_room">ADD</button>
</form>
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
