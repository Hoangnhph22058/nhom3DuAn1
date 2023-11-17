    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">NỘI DUNG</th>
                <th scope="col">NGƯỜI BÌNH LUẬN</th>
                <th scope="col">THỜI GIAN BÌNH LUẬN</th>
            </tr>
        </thead>
        <button class="btn btn-success"><a href="index.php?act=show_detail_room&id=<?php echo $_GET['id'] ?>">Trở về trang chi tiết</a></button>
        <tbody>
            <?php foreach ($binh_luan as $value) {
                extract($value); ?>
                <tr>
                    <th><?= $id_binh_luan ?></th>
                    <td><?= $chi_tiet_binh_luan ?></td>
                    <td><?= $ten_tai_khoan ?></td>
                    <td><?= $thoi_gian_binh_luan ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

