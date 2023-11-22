<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Tài Khoản</th>
            <th scope="col">Mật Khẩu</th>
            <th scope="col">Email</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Ảnh Đại Diện</th>
            <th scope="col">Chức Năng</th>
        </tr>
    </thead>
    <p style="color: green;"><?php if (isset($mess)) {
            echo $mess;
        } ?></p>
    <tbody>
        <tr>
            <td><?php echo $tai_khoan['id_tai_khoan'] ?></td>
            <td><?php echo $tai_khoan['ten_tai_khoan'] ?></td>
            <td><?php echo $tai_khoan['mat_khau'] ?></td>
            <td><?php echo $tai_khoan['email'] ?></td>
            <td><?php echo $tai_khoan['sdt'] ?></td>
            <td><img style="width: 200px;height:200px" src="../upload/<?php echo $tai_khoan['anh_dai_dien'] ?>" alt=""><img src="" alt=""></td>
            <td><button class="btn btn-success"><a style="color:white" href="index.php?act=edit_tai_khoan&id=<?php echo $tai_khoan['id_tai_khoan'] ?>">Sửa Thông Tin</a></button></td>
        </tr>

    </tbody>
</table>