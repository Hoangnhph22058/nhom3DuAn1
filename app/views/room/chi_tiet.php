<!-- ROOM DETAIL -->

<div style="text-align: center;">
    <h2>Chi Tiết Phòng <?php echo $phong_detail['ten_phong'] ?></h2>
</div>
<section class="section-product-detail">
    <div class="container">
        <!-- DETAIL -->
        <div class="product-detail margin">
            <div class="row">
                <div class="col-lg-9">
                    <!-- LAGER IMGAE -->
                    <div class="wrapper">
                        <div class="gallery3">
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                </span>
                                <img style="width: 400px;height:300px;" src="./upload/<?php echo $phong_detail['anh']  ?>" alt="" class="">
                            </div>
                            <div class="gallery__img-block  current">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 1
                                </span>
                                <img style="width: 400px;height:300px;" src="./upload/<?php echo $phong_detail['anh']  ?>" alt="" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 2
                                </span>
                                <img src="images/Product/img-3.jpg" alt="images/Product/img-3.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 3
                                </span>
                                <img src="images/Product/img-4.jpg" alt="images/Product/img-4.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 4
                                </span>
                                <img src="images/Product/img-5.jpg" alt="images/Product/img-5.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 5
                                </span>
                                <img src="images/Product/img-6.jpg" alt="images/Product/img-6.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 6
                                </span>
                                <img src="images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 7
                                </span>
                                <img src="images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 8
                                </span>
                                <img src="images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 9
                                </span>
                                <img src="images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__controls">
                            </div>
                        </div>
                    </div>
                    <!-- END / LAGER IMGAE -->
                </div>
                <div class="col-lg-3">
                    <!-- FORM BOOK -->
                    <div class="product-detail_book">
                        <div class="product-detail_total">
                            <img src="images/Product/icon.png" alt="#" class="icon-logo">
                            <h6><?php echo $phong_detail['ten_phong'] ?></h6>
                            <p class="price">
                                <span class="amout"><?php echo $phong_detail['gia_tien'] ?></span> /đêm
                            </p>
                        </div>
                        <div class="product-detail_form">
                            <div class="sidebar">
                                <!-- WIDGET CHECK AVAILABILITY -->
                                <form action="" method="post">
                                    <div class="widget widget_check_availability">
                                        <div class="check_availability">
                                            <div class="check_availability-field">
                                                <label>Arrive</label>
                                                <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker1">
                                                    <input class="form-control wrap-box" type="text" placeholder="Arrival Date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Depature</label>
                                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control wrap-box" type="text" placeholder="Departure Date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <!-- END / WIDGET CHECK AVAILABILITY -->
                            </div>
                            <button class="btn btn-room btn-product">Book Now</button>
                        </div>
                    </div>
                    <!-- END / FORM BOOK -->
                </div>
            </div>
        </div>
        <!-- END / DETAIL -->
        <!-- TAB -->
        <div class="product-detail_tab">
            <div class="row">
                <div class="col-md-3">
                    <ul class="product-detail_tab-header">
                        <li><a href="#overview" data-toggle="tab">Tổng quan</a></li>
                        <li><a href="#calendar" data-toggle="tab">Calendar</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="product-detail_tab-content tab-content">
                        <!-- OVERVIEW -->
                        <div class="tab-pane fade" id="overview">
                            <div class="product-detail_overview">
                                <h5 class='text-uppercase'><?php echo $phong_detail['ten_phong'] ?></h5>
                                <p>Sức Chứa: tối đa <?php echo $phong_detail['suc_chua'] ?> người </p><br>
                                <p>Chi Tiết: <?php echo $phong_detail['chi_tiet_phong'] ?> </p>
                            </div>
                        </div>
                        <!-- END / OVERVIEW -->


                        <!-- CALENDAR -->
                        <div class="tab-pane fade" id="calendar">
                            <div class="product-detail_calendar-wrap row">
                                <div class="col-sm-6">
                                    <!-- CALENDAR ITEM -->
                                    <div class="calendar_custom">
                                        <div class="calendar_title">
                                            <span class="calendar_month">JUNE</span>
                                            <span class="calendar_year">2017</span>
                                            <a href="#" class="calendar_prev calendar_corner"><i class="ion-ios-arrow-thin-left"></i></a>
                                        </div>
                                        <table class="calendar_tabel">
                                            <thead>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td></td>
                                                <td class="apb-calendar_current-date">
                                                    <a href="#"><small>1</small></a>
                                                </td>
                                                <td><a href="#"><small>2</small></a></td>
                                                <td><a href="#"><small>3</small></a></td>
                                                <td><a href="#"><small>4</small></a></td>
                                                <td><a href="#"><small>5</small></a></td>
                                                <td><a href="#"><small>6</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>7</small></a></td>
                                                <td><a href="#"><small>8</small></a></td>
                                                <td><a href="#"><small>9</small></a></td>
                                                <td><a href="#"><small>10</small></a></td>
                                                <td class="apb-calendar_current-select"><a href="#"><small>11</small></a></td>
                                                <td class="apb-calendar_current-select"><a href="#"><small>12</small></a></td>
                                                <td><a href="#"><small>13</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>14</small></a></td>
                                                <td><a href="#"><small>15</small></a></td>
                                                <td class="not-available"><a href="#"><small>16</small></a></td>
                                                <td class="not-available"><a href="#"><small>17</small></a></td>
                                                <td><a href="#"><small>18</small></a></td>
                                                <td><a href="#"><small>19</small></a></td>
                                                <td><a href="#"><small>20</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>21</small></a></td>
                                                <td><a href="#"><small>22</small></a></td>
                                                <td><a href="#"><small>23</small></a></td>
                                                <td><a href="#"><small>24</small></a></td>
                                                <td><a href="#"><small>25</small></a></td>
                                                <td><a href="#"><small>26</small></a></td>
                                                <td><a href="#"><small>27</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>28</small></a></td>
                                                <td><a href="#"><small>29</small></a></td>
                                                <td><a href="#"><small>30</small></a></td>
                                                <td><a href="#"><small>31</small></a></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- END CALENDAR ITEM -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- CALENDAR ITEM -->
                                    <div class="calendar_custom">
                                        <div class="calendar_title">
                                            <span class="calendar_month">JUNE</span>
                                            <span class="calendar_year">2017</span>
                                            <a href="#" class="calendar_next calendar_corner"><i class="ion-ios-arrow-thin-right"></i></a>
                                        </div>
                                        <table class="calendar_tabel">
                                            <thead>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td></td>
                                                <td class="apb-calendar_current-date">
                                                    <a href="#"><small>1</small></a>
                                                </td>
                                                <td><a href="#"><small>2</small></a></td>
                                                <td><a href="#"><small>3</small></a></td>
                                                <td><a href="#"><small>4</small></a></td>
                                                <td><a href="#"><small>5</small></a></td>
                                                <td><a href="#"><small>6</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>7</small></a></td>
                                                <td><a href="#"><small>8</small></a></td>
                                                <td><a href="#"><small>9</small></a></td>
                                                <td><a href="#"><small>10</small></a></td>
                                                <td class="apb-calendar_current-select"><a href="#"><small>11</small></a></td>
                                                <td class="apb-calendar_current-select"><a href="#"><small>12</small></a></td>
                                                <td><a href="#"><small>13</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>14</small></a></td>
                                                <td><a href="#"><small>15</small></a></td>
                                                <td class="not-available"><a href="#"><small>16</small></a></td>
                                                <td class="not-available"><a href="#"><small>17</small></a></td>
                                                <td><a href="#"><small>18</small></a></td>
                                                <td><a href="#"><small>19</small></a></td>
                                                <td><a href="#"><small>20</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>21</small></a></td>
                                                <td><a href="#"><small>22</small></a></td>
                                                <td><a href="#"><small>23</small></a></td>
                                                <td><a href="#"><small>24</small></a></td>
                                                <td><a href="#"><small>25</small></a></td>
                                                <td><a href="#"><small>26</small></a></td>
                                                <td><a href="#"><small>27</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>28</small></a></td>
                                                <td><a href="#"><small>29</small></a></td>
                                                <td><a href="#"><small>30</small></a></td>
                                                <td><a href="#"><small>31</small></a></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- END CALENDAR ITEM -->
                                </div>
                                <div class="calendar_status text-center col-sm-12">
                                    <span>Available</span>
                                    <span class="not-available">Not Available</span>
                                </div>
                            </div>
                        </div>
                        <!-- END / CALENDAR -->
                    </div>
                </div>
            </div>
            <div>
                <?php
                if (isset($_SESSION['id_tai_khoan'])) { ?>
                    <h3>Bình luận sản phẩm</h3>
                    <form action="index.php?act=binh_luan&id=<?php echo $_GET['id'] ?>" method="post">
                        <input type="hidden" name="id_tai_khoan" value="<?php echo $_SESSION['id_tai_khoan'] ?>">
                        <label>Tên Tài Khoản</label><br>
                        <p><?php echo $_SESSION['ten_tai_khoan'] ?></p>
                        <input type="hidden" name="id_phong" value="<?php echo $phong_detail['id_phong'] ?>"><br>
                        <label>Nội dung bình luận</label><br>
                        <textarea name="chi_tiet_binh_luan" id="" cols="30" rows="10"></textarea><br>
                        <input type="hidden" value="0" name="trang_thai" id="">
                        <button type="submit" name="binh_luan" class="btn btn-primary">Gửi</button>
                    </form>
                <?php } else { ?>
                    <p>Bạn cần đăng nhập để bình luận!<a href="index.php?act=dang_nhap">Đăng nhập ngay.</a></p><br>
                <?php } ?>
                <?php 
                if(isset($binh_luan) && $binh_luan != NULL ){?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">NỘI DUNG</th>
                            <th scope="col">NGƯỜI BÌNH LUẬN</th>
                            <th scope="col">THỜI GIAN BÌNH LUẬN</th>
                        </tr>
                    </thead>
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
                <?php } else{ ?>
                  <p> <?php echo $mess ?></p>  
                <?php } ?>
            </div>
        </div>