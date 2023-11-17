<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from landing.engotheme.com/html/skyline/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 10:50:22 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Home 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/vit-gallery.css">
    <link rel="shortcut icon" type="text/css" href="images/Home-1/sky-logo-header.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<header class="header-sky">
    <div class="container">
        <!--HEADER-TOP-->
        <div class="header-top">
            <div class="header-top-left">
                <span><i class="ion-ios-location-outline"></i> Ngõ 56 - Xuân Phương - Nam Từ Liêm - Hà Nội</span>
                <span><i class="fa fa-phone" aria-hidden="true"></i> 0972428645</span>
            </div>
            <div class="header-top-right">
                <?php
                if (isset($_SESSION['ten_tai_khoan']) && $_SESSION['ten_tai_khoan'] != "") {
                    $id_tai_khoan = $_SESSION['id_tai_khoan'];
                    ?>
                    <li class="dropdown ">
                        <a style="color: white;" href="" title="Reservation" class="dropdown-toggle" data-toggle="dropdown">Xin Chào <?php echo $_SESSION['ten_tai_khoan'] ?><b class="caret"></b></a>
                        <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                        <?php echo' <li><a href="index.php?act=one_tai_khoan&id='.$id_tai_khoan.'"   title="">Thông Tin Tài Khoản</a></li>'?>
                            <li><a href="index.php?act=dang_xuat" title="">Đăng Xuất</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <ul>
                        <li class="dropdown"><a href="index.php?act=dang_nhap" title="LOGIN" class="">ĐĂNG NHẬP</a></li>
                        <li class="dropdown"><a href="index.php?act=register" title="REGISTER" class="">ĐĂNG KÍ</a></li>
                    </ul>
                <?php } ?>

            </div>
        </div>
        <!-- END/HEADER-TOP -->
    </div>
    <!-- MENU-HEADER -->
    <div class="menu-header">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header ">
                    <a class="navbar-brand" href="" title="Skyline"><img src="images/Home-1/sky-logo-header.png" alt="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="index.php" title="Home" class="">Trang Chủ</a>
                        </li>
                        <li class="">
                            <a href="" title="Phòng" class="">Phòng</a>
                        </li>

                        <li class="dropdown ">
                            <a href="reservation_1.html" title="Reservation" class="dropdown-toggle" data-toggle="dropdown">Các Bước Đặt Phòng<b class="caret"></b></a>
                            <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                <li><a href="" title="">Bước 1</a></li>
                                <li><a href="" title="">Bước 2</a></li>
                                <li><a href="" title="">Bước 3</a></li>
                                <li><a href="" title="">Bước 4</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" title="Contact">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- END / MENU-HEADER -->
</header>
<!-- END-HEADER -->
<!-- SLIDER -->
<section class="section-slider height-v">
    <div id="index12" class="owl-carousel  owl-theme">
        <div class="item">
            <img alt="Third slide" src="images/Home-1/Slider-v1.jpg" class="img-responsive">
            <div class="carousel-caption">
                <h1>Welcome to Skyline</h1>
                <p><span class="line-t"></span>Hotels & Resorts <span class="line-b"></span></p>
            </div>
        </div>
        <div class="item">
            <img alt="Third slide" src="images/Home-2/Slider-v2.jpg" class="img-responsive">
            <div class="container">
                <div class="carousel-caption ">
                    <h1 class="v2">Enjoy a Luxury Experience</h1>
                    <p class="p-v2"><span class="line-t"></span>Hotels & Resorts <span class="line-b"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="check-avail">
        <form action="" method="post">
            <div class="container">
                <div class="arrival date-title ">
                    <label>Ngày nhận phòng </label>
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text">
                        <span class="input-group-addon"><img src="images/Home-1/date-icon.png" alt="#"></span>
                    </div>
                </div>
                <div class="departure date-title ">
                    <label>Ngày trả phòng </label>
                    <div id="datepickeri" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text">
                        <span class="input-group-addon"><img src="images/Home-1/date-icon.png" alt="#"></span>
                    </div>
                </div>
                <div class="adults date-title ">
                    <label>Số người</label>
                    <div class=" carousel-search">
                        <div class="btn-group">
                            <a class="btn dropdown-toggle " data-toggle="dropdown" href="#">2</a>
                            <ul class="dropdown-menu">
                                <li><a>1</a></li>
                                <li><a>2</a></li>
                                <li><a>3</a></li>
                                <li><a>4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="find_btn date-title">
                    <div class="text-find">
                        <a href="" style="color: black;font-size: 20px;">kiểm tra</a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>