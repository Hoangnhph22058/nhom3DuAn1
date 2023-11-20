
<section class="body-page page-v1">
        <div class="container">
            <div class="content">
                <h2 class="sky-h3">ĐĂNG NHẬP TÀI KHOẢN</h2>
                <h5 class="p-v1">Nếu chưa có tài khoản vui lòng bấm "đăng kí thành viên mới"</h5>
                <?php if(isset($thong_bao)&&$thong_bao!=""){ ?>
                    <p style="color: red;"> <?php echo $thong_bao ?></p>
                    <?php } ?>
                <form action="index.php?act=dang_nhap" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ten_tai_khoan" value="" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" name="mat_khau" placeholder="Password">
                        <span class="fa fa-fw fa-eye field-icon toggle-password " data-toggle="#password-field"></span>
                    </div>
                    <button type="submit" name="dang_nhap" class="btn btn-default">Đăng Nhập</button>
                </form>
                
                <p ><a href="index.php?act=register" style="color: white;">Đăng kí thành viên mới</a> &nbsp;- &nbsp; <a href="" style="color: white;">Quên mật khẩu</a></p>
            </div>
        </div>
    </section>
  