<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Ten loai phong</th>
            <th scope="col">ten_phong</th>
            <th scope="col">anh</th>
            <th scope="col">suc chua</th>
            <th scope="col">gia tien</th>
            <th scope="col">trang thai</th>
            <th scope="col">chuc nang</th>
        </tr>
    </thead>
        <?php foreach ($phongs as $phong){ 
            extract($phong);?>
            
        <tr>
        <td><?php echo $id_phong ?></td>
            <td><?php echo $loai_phong ?></td>
            <td><?php echo $ten_phong  ?></td>
            <td><img style="width: 200px;height:200px" src="./upload/<?php echo $anh ?>" alt=""></td>
            <td><?php echo $suc_chua ?></td>
            <td><?php echo $gia_tien   ?></td>
            <td><?php echo $trang_thai  ?></td>
            <td><img src="" alt=""></td>
            <td><button class="btn btn-success"><a style="color:white" href="index.php?act=add_detail_image&id=<?php echo $id_phong ?>">Thêm ảnh chi tiết</a></button></td> 
        </tr>
            <?php } ?>
    </tbody>
</table>