<section class="rooms">
        <div class="container">
            <h2 class="title-room">Danh sách phòng</h2>
            <div class="outline"></div>
            <p class="rooms-p">Hình ảnh phòng được chúng tôi cam kết trung thực 100% như ảnh</p>
            <div class="wrap-rooms">
                <div class="row">
                    <div id="rooms" class="owl-carousel owl-theme">
                        
                        <div class="item ">
                        <?php foreach($phong as $item){
                            extract($item);
                            $hinhParth = "./upload/". $anh;
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <?php if(is_file($hinhParth)){ ?>
                                        <img style="width: 400px; height:400px;" src="<?php echo $hinhParth  ?>" class="img-responsive" alt="PLuxury Room" title="Luxury Room">
                                        <?php }else{ ?>
                                            <p>Phòng Không Có Ảnh</p>
                                        <?php } ?>
                                        
                                    </div>
                                    <div class="rooms-content">
                                        <h4 class="sky-h4"><?php echo $ten_phong ?></h4>
                                        <p class="price"><?php echo $gia_tien ?>VND/1 ĐÊM</p>
                                        <?php if($trang_thai == 0) {
                                        ?>
                                        <p style="color: green;">Trạng thái: trống</p>
                                        <?php }else{ ?>
                                            <p style="color:yellow;">Trạng thái: đã đặt</p>
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- END / ROOMS -->
    <!-- ABOUT-US-->
    <!-- END/ ABOUT-US-->
    <!-- BEST -->
    
    <!-- END / BEST -->
    <!-- TESTIMONOALS -->
    <section class="testimonials">
        <div class="testimonials-h">
            <div class="testimonials-content">
                <div class="container">
                    <div id="testimonials" class="owl-carousel owl-theme">
                        <div class="item ">
                            <div class="img-testimonials"><img src="images/Home-1/about-testimonials-img.png" alt="#"></div>
                            <p class="testimonials-p"><span>“</span>​‌ This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                            <h5 class="sky-h5">JULIA ROSE</h5>
                            <p class="testimonials-p1">From Los Angeles, California</p>
                        </div>
                        <div class="item">
                            <div class="img-testimonials"><img src="images/Home-1/about-testimonials-img.png" alt="#"></div>
                            <p class="testimonials-p"><span>“</span>​‌ Thisis the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing onthe cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                            <h5 class="sky-h5">JULIA ROSE</h5>
                            <p class="testimonials-p1">From Los Angeles, California</p>
                        </div>
                        <div class="item">
                            <div class="img-testimonials"><img src="images/Home-1/about-testimonials-img.png" alt="#"></div>
                            <p class="testimonials-p"><span>“</span>​‌ This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                            <h5 class="sky-h5">JULIA ROSE</h5>
                            <p class="testimonials-p1">From Los Angeles, California</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>