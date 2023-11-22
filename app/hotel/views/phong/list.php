<h2 style="text-align: center;">Danh Sách Phòng</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Phòng</th>
            <th scope="col">Loại Phòng</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Sức Chứa</th>
            <th scope="col">Chi Tiết Phòng</th>
            <th scope="col">Giá Tiền</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($phong as $item) {
            extract($item);
        ?>
            <tr>
                <td><?= $id_phong ?></td>
                <td><?= $ten_phong ?></td>
                <td><?= $id_loai_phong ?></td>
                <td><img style="width: 200px;height:200px" src="../upload/<?php echo $anh ?>" alt=""><img src="" alt=""></td>
                <td><?= $suc_chua ?></td>
                <td><?= $chi_tiet_phong ?></td>
                <td><?= $gia_tien ?></td>
                <?php
                if ($trang_thai == 0) { ?>
                    <td>Đang Hoạt Động</td>
                <?php } else {  ?>
                    <td>Ngưng Hoạt Động</td>
                <?php } ?>
                <td>
                    <a href="index.php?act=edit_phong&id=<?= $id_phong ?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                    <a href="index.php?act=ngung_phong&id=<?= $id_phong ?>"><button type="button" class="btn btn-danger">Ngừng Hoạt Động</button></a>
                    <a href="index.php?act=khoi_phuc_phong&id=<?= $id_phong ?>"><button type="button" class="btn btn-success">Khôi Phục Hoạt Động</button></a>
                    <!-- <a href="index.php?act=delete_phong&id="><button type="button" class="btn btn-success">Xóa Vĩnh Viễn</button></a> -->
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>