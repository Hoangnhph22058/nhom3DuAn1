<!-- BODY-LOGIN -->
<section class="body-page page-v1 page-v2">
        <div class="container">
            <div class="content">
                <h2 class="sky-h3">EDIT TÀI KHOẢN</h2>
                  <form action="index.php?act=update_tai_khoan" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id_tai_khoan" value="<?php echo $tai_khoan['id_tai_khoan'] ?>" placeholder="Tên Tài Khoản *">
                    <div class="form-group">
                        <label style="color: red;">Tên Tài Khoản</label>
                        <input type="text" class="form-control" name="ten_tai_khoan" value="<?php echo $tai_khoan['ten_tai_khoan'] ?>" placeholder="Tên Tài Khoản *">
                    </div>
                    <div class="form-group">
                        <label style="color: red;">Mật Khẩu</label>
                        <input id="password-field" type="text" class="form-control" name="mat_khau" value="<?php echo $tai_khoan['mat_khau'] ?>" placeholder="Mật Khẩu *">
                    </div>
                    <div class="form-group">
                        <label style="color: red;">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $tai_khoan['email'] ?>" required="required" title="" placeholder="Email *">
                    </div>
                    <div class="form-group">
                    <label style="color: red;">Số Điện Thoại</label>
                        <input type="text" name="sdt" class="form-control" value="<?php echo $tai_khoan['sdt'] ?>" required="required" title="" placeholder="Số Điện Thoại *">
                    </div>
                    <div class="form-group">
                    <label style="color: red;">Ảnh Đại Diện</label>
                        <input type="file" name="anh_dai_dien" class="form-control"title="" placeholder="Ảnh đại diện *">
                        <img style="width: 200px;height:200px" src="../upload/<?php echo $tai_khoan['anh_dai_dien'] ?>" alt="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="vai_tro" class="form-control" value="<?php echo $tai_khoan['vai_tro'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="trang_thai" class="form-control" value="<?php echo $tai_khoan['trang_thai'] ?>">
                    </div>
                    <button type="submit" name="update" class="btn btn-default">Cập Nhật</button>
                </form>
            </div>
        </div>
    </section>
    <!-- END/BODY-LOGIN-->