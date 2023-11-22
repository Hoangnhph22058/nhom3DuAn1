<h2 style="text-align: center;">Danh Sách Bình Luận</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Chi Tiết Bình Luận</th>
            <th scope="col">Phòng</th>
            <th scope="col">Người Bình Luận</th>
            <th scope="col">Thời Gian</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($binh_luan as $item) {
            extract($item);
        ?>
            <tr>
                <td><?= $id_binh_luan ?></td>
                <td><?= $chi_tiet_binh_luan ?></td>
                <td><?= $ten_phong ?></td>
                <td><?= $ten_tai_khoan ?></td>
                <td><?= $thoi_gian_binh_luan ?></td>
                <?php
                if($trang_thai == 0){ ?>
                    <td>Đang Hoạt Động</td>
                <?php }else {  ?>
                    <td>Ngưng Hoạt Động</td>
                <?php } ?>
                <td>
                  
                   <a href="index.php?act=delete_binh_luan&id=<?= $id_binh_luan ?>"><button type="button" class="btn btn-danger">Xóa Vĩnh Viễn</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>