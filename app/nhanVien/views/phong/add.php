<form action="index.php?act=them_phong" enctype="multipart/form-data" method="post">
    <select name="loai_phong">
        <?php foreach($ten_loai_phong as $item){
            extract($item);
        echo '<option value="'.$id_loai_phong.'">'.$ten_loai_phong.'</option>';
         } ?>
    </select><br>
    <label>ten phong</label>
    <input type="text" name="ten_phong" value="">
    <br><label>anh</label>
    <input type="file" name="anh">
    <br><label>suc chua</label>
    <input type="number" name="suc_chua">
    <br><label>gia tien</label>
    <input type="number" name="gia_tien">
    <br><label>trang thai</label>
    <select name="trang_thai" >
        <option value="0">Trống</option>
        <option value="1">Đã đặt</option>
    </select>
    <button type="submit" name="add_room">ADD</button>
</form>