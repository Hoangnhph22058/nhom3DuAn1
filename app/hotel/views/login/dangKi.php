<!-- BODY-LOGIN -->
<section class="body-page page-v1 page-v2">
        <div class="container">
            <div class="content">
                <h2 class="sky-h3">Đăng Kí Tài Khoản</h2>
                <p style="color:green;"><?php 
                if(isset($mess) && $mess != ""){
                    echo $mess;
                }
                ?></p>
                <form action="index.php?act=register" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ten_tai_khoan" value="" placeholder="Tên Tài Khoản *">
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" name="mat_khau" placeholder="Mật Khẩu *">
                        <span data-toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="" required="required" title="" placeholder="Email *">
                    </div>
                    <div class="form-group">
                        <input type="text" name="sdt" class="form-control" value="" required="required" title="" placeholder="Số Điện Thoại *">
                    </div>
                    <div class="form-group">
                        <input type="file" name="anh_dai_dien" class="form-control" value="" required="required" title="" placeholder="Ảnh đại diện *">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="vai_tro" class="form-control" value="1">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="trang_thai" class="form-control" value="0">
                    </div>
                    <button type="submit" name="dang_ky" class="btn btn-default">Đăng Kí</button>
                </form>
            </div>
        </div>
    </section>
    <!-- END/BODY-LOGIN-->