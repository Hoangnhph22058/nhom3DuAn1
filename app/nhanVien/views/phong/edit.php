<?php
// Validate and sanitize the room_id parameter
$room_id = (isset($_GET['room_id']) && is_numeric($_GET['room_id'])) ? intval($_GET['room_id']) : 0;

// Assuming you pass the room ID through the URL
$sql = "SELECT * FROM phong WHERE id_phong = $room_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $room = $result->fetch_assoc();
    // Extract room details
    extract($room);
?>
<form action="index.php?act=cap_nhat_phong&room_id=<?php echo $id_phong; ?>" enctype="multipart/form-data" method="post">
    <select name="loai_phong">
        <?php foreach($ten_loai_phong as $item) {
            extract($item);
            echo '<option value="'.$id_loai_phong.'" ' . ($id_loai_phong == $loai_phong ? 'selected' : '') . '>'.$ten_loai_phong.'</option>';
        } ?>
    </select><br>
    <label>Tên Phòng</label>
    <input type="text" name="ten_phong" value="<?php echo $ten_phong; ?>">
    <br><label>Ảnh</label>
    <input type="file" name="anh">
    <br><label>Sức Chứa</label>
    <input type="number" name="suc_chua" value="<?php echo $suc_chua; ?>">
    <br><label>Giá Tiền</label>
    <input type="number" name="gia_tien" value="<?php echo $gia_tien; ?>">
    <br><label>Trạng Thái</label>
    <select name="trang_thai">
        <option value="0" <?php echo ($trang_thai == 0) ? 'selected' : ''; ?>>Trống</option>
        <option value="1" <?php echo ($trang_thai == 1) ? 'selected' : ''; ?>>Đã đặt</option>
    </select>
    <button type="submit" name="edit_room">UPDATE</button>
</form>

<?php
}
?>
