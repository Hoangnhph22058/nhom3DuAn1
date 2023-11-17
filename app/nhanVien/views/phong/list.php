
<table>
    <tr>
        <th>Tên Phòng</th>
        <th>Ảnh</th>
        <th>Sức chứa</th>
        <th>Giá tiền</th>
        <th>Trạng Thái</th>
        <th></th>
    </tr>
    <?php 
        foreach($phong as $item){
            extract($item);
    echo '<tr boder =1>
        <td>'.$id_phong.'</td>
        <td>'.$id_loai_phong.'</td>
        <td>'.$ten_phong.'</td>
        <td>'.$anh.'</td>
        <td>'.$suc_chua.'</td>
        <td>'.$gia_tien.'</td>
        <td>'.$trang_thai.'</td>
    </tr>';
    } 
    ?>
</table>