<<<<<<< HEAD
<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH SẢN PHẨM </h1>
    </div>
    <form action="index.php?act=list_phong" method="post">
        <select name="idphong">
            <?php foreach($ten_loai_phong as $item){
            extract($item);
            echo '<option value="'.$id_loai_phong.'">'.$ten_loai_phong.'</option>';
         } ?>
        </select>
    </form>
=======

>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
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
<<<<<<< HEAD
        foreach($ten_loai_phong as $item){
=======
        foreach($phong as $item){
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
            extract($item);
    echo '<tr boder =1>
        <td>'.$id_phong.'</td>
        <td>'.$id_loai_phong.'</td>
        <td>'.$ten_phong.'</td>
        <td>'.$anh.'</td>
        <td>'.$suc_chua.'</td>
        <td>'.$gia_tien.'</td>
        <td>'.$trang_thai.'</td>
<<<<<<< HEAD
        
=======
>>>>>>> 3d97e4d7dcf14b803aadaed5b53632b5038fd825
    </tr>';
    } 
    ?>
</table>