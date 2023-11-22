<h2 style="text-align: center;">Danh Sách Loại Phòng</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Loại Phòng</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Chi Tiết</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($loai_phong as $item) {
            extract($item);
        ?>
            <tr>
                <td><?= $id_loai_phong ?></td>
                <td><?= $ten_loai_phong ?></td>
                <td><img style="width: 200px;height:200px" src="../upload/<?php echo $anh_loai_phong ?>" alt=""><img src="" alt=""></td>
                <td><?= $chi_tiet_loai_phong ?></td>
                <?php
                if($trang_thai == 0){ ?>
                    <td>Đang Hoạt Động</td>
                <?php }else {  ?>
                    <td>Ngưng Hoạt Động</td>
                <?php } ?>
                <td>
                   <a href="index.php?act=edit_loai_phong&id=<?= $id_loai_phong ?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                   <a href="index.php?act=ngung_hoat_dong&id=<?= $id_loai_phong ?>"><button type="button" class="btn btn-danger">Ngừng Hoạt Động</button></a>
                   <a href="index.php?act=khoi_phuc_hoat_dong&id=<?= $id_loai_phong ?>"><button type="button" class="btn btn-success">Khôi Phục Hoạt Động</button></a>
                   <a href="index.php?act=delete&id=<?= $id_loai_phong ?>"><button type="button" class="btn btn-success">Xóa Vĩnh Viễn</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>