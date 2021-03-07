<?php
require ('./src/index.php');

use NanoGas\Modules\Product\Product;
use NanoGas\Modules\Product\ProductDto;
/** @var ProductDto $product */
foreach (Product::getProducts() as $product){
    var_dump($product->getName());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nano Gas</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- stylesheets css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="icon" href="images/favicon.jpg" type="image/jpg" sizes="16x16">
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>

<!-- Home section -->
<section id="home" class="parallax-section">
    <div class="gradient-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h1 class="wow fadeInUp" data-wow-delay="0.6s">Nano Gas</h1>
                <p class="wow fadeInUp" data-wow-delay="1.0s">Cửa hàng Nano gas cảm ơn bạn đã ghé thăm chúng tôi! Chứ tôi luôn mang lại sự an tâm và chi phí phù hợp nhất với bạn.</p>
                <a href="#feature" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Khám phá ngay !</a>
            </div>

        </div>
    </div>
</section>
<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Nano Gas</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.php" class="smoothScroll">Admin</a></li>
                <li><a href="#top" class="smoothScroll">Trang chủ</a></li>
                <li><a href="#feature" class="smoothScroll">Đặc trưng</a></li>
                <li><a href="#about" class="smoothScroll">Về chúng tôi</a></li>
                <li><a href="#menu" class="smoothScroll">Sản phẩm</a></li>
                <li><a href="#gallery" class="smoothScroll">Quà Tặng</a></li>
                <li><a href="#store" class="smoothScroll">Cửa hàng</a></li>
                <li><a href="#contact" class="smoothScroll">Liên lạc</a></li>
                <li><a href="login.php" class="smoothScroll">Đăng nhập</a></li>
            </ul>
        </div>
    </div>
</div>


<!-- Feature section -->
<section id="feature" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                    <h2>Tại sao chọn chúng tôi?</h2>
                    <h4>Đại lý gas Nano</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-heartbeat"></i></span>
                    </div>
                    <h3>An tâm</h3>
                    <p>Chúng tôi luôn đặt sự an toàn của bạn lên hàng đầu,nỗi lo của bạn cũng là vần đề của chúng tôi.Và chúng tôi sẽ giải quyết nó.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-money"></i></span>
                    </div>
                    <h3>Chi phí</h3>
                    <p>Chúng tôi luôn có mức giá cạnh tranh,nhiều chế độ đại ngộ cho thành viên của đại gia dình Nano gas.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-clock-o"></i></span>
                    </div>
                    <h3>Nhanh Chóng</h3>
                    <p>Chúng tôi luôn sẵn sàn phục vụ bạn 7 ngày trong tuần ,tất cả các ngày lễ tết.Vì chúng tôi luôn ở bên bạn.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- About section -->
<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Câu chuyện của chúng ta</h2>
                    <h4>Được thành lập từ năm 2021</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="wow fadeInUp col-md-7 col-sm-3" data-wow-delay="0.3s">
                <img src="images/about-img.jpg" class="img-responsive" alt="About">
                <h3>Không ngừng phát triển và tạo ra các sản phẩm an toàn hơn cho gia đình.</h3>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

                <!-- flexslider -->
                <div class="flexslider">
                    <ul class="slides">

                        <li>
                            <img src="images/slide-img1.jpg" alt="Flexslider">
                        </li>
                        <li>
                            <img src="images/slide-img2.jpg" alt="Flexslider">
                        </li>
                        <li>
                            <img src="images/slide-img3.jpg" alt="Flexslider">
                        </li>

                    </ul>
                </div>
                <p>Từ những sản phẩm nghiên cứu nhỏ chúng tôi đã dần hình thành và phát triển mạnh mẽ như hôm nay với 150 cửa hàng ,có mặt trên 63 tỉnh thành.</p>
            </div>
        </div>
</section>

<!-- Menu section -->
<section id="menu" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Sản phẩm</h2>
                    <h4>Những sản phẩm mũi nhọn của chúng tôi</h4>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="media wow fadeInUp" data-wow-delay="0.6s">
                    <div class="media-object pull-left">
                        <img src="images/gallery-img1.jpg" class="img-responsive" alt="Food Menu">
                        <span class="menu-image"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">EIF gas</h3>
                        <p>Màu sắc : Đỏ</p>
                        <p>Loại vỏ : Thép</p>
                        <p>Trọng lượng : 15 Kg</p>
                        <p>Giá : 290.000vnd</p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="0.9s">
                    <div class="media-object pull-left">
                        <img src="images/gallery-img2.jpg" class="img-responsive" alt="Food Menu">
                        <span class="menu-image"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Total Gas</h3>
                        <p>Màu sắc : Đỏ</p>
                        <p>Loại vỏ : Composit</p>
                        <p>Trọng lượng : 13 Kg</p>
                        <p>Giá : 320.000vnd</p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="1.2s">
                    <div class="media-object pull-left">
                        <img src="images/gallery-img3.jpg" class="img-responsive" alt="Food Menu">
                        <span class="menu-image"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Nam Gas</h3>
                        <p>Màu sắc : Đỏ</p>
                        <p>Loại vỏ : Composit</p>
                        <p>Trọng lượng : 13 Kg</p>
                        <p>Giá : 320.000vnd</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="media wow fadeInUp" data-wow-delay="1s">
                    <div class="media-object pull-left">
                        <img src="images/gallery-img4.jpg" class="img-responsive" alt="Food Menu">
                        <span class="menu-image"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">LP Petrol</h3>
                        <p>Màu sắc : Đỏ</p>
                        <p>Loại vỏ : Composit</p>
                        <p>Trọng lượng : 13 Kg</p>
                        <p>Giá : 320.000vnd</p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="1.3s">
                    <div class="media-object pull-left">
                        <img src="images/gallery-img5.jpg" class="img-responsive" alt="Food Menu">
                        <span class="menu-image"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Petrol Limex</h3>
                        <p>Màu sắc : Đỏ</p>
                        <p>Loại vỏ : Composit</p>
                        <p>Trọng lượng : 13 Kg</p>
                        <p>Giá : 320.000vnd</p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="1.6s">
                    <div class="media-object pull-left">
                        <img src="images/gallery-img6.jpg" class="img-responsive" alt="Food Menu">
                        <span class="menu-image"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Thủ Đức Gas</h3>
                        <p>Màu sắc : Đỏ</p>
                        <p>Loại vỏ : Composit</p>
                        <p>Trọng lượng : 13 Kg</p>
                        <p>Giá : 320.000vnd</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Team section -->
<section id="team" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Thành viên của gia đình Nano gas</h2>
                    <h4>Những người sáng lập và đồng hành cùng chúng tôi.</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-thumb">
                    <img src="images/person1.jpg" class="img-responsive" alt="Team">
                    <div class="team-des">
                        <h3>Trương Minh Lợi</h3>
                        <h4>Người sáng lập</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-thumb">
                    <img src="images/person2.jpg" class="img-responsive" alt="Team">
                    <div class="team-des">
                        <h3>Phạm Thế Hiển</h3>
                        <h4>Giám Đốc Điều Hành</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-thumb">
                    <img src="images/person3.jpg" class="img-responsive" alt="Team">
                    <div class="team-des">
                        <h3>Hoàng Trọng Minh</h3>
                        <h4>Giám Đốc Sản Xuất</h4>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.3s">
                <h2>Kim chỉ nam của chúng tôi</h2>
                <p>Luôn lấy khách hàng là trung tâm,từ đó chúng tôi mang lại các giá trị phù hợp cho bạn.Sự an tâm của bạn cũng là một phần trong dó và chúng tôi cũng ưu tiên hàng đầu.</p>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
                <h2>Dịch vụ của chúng tôi</h2>
                <p>Không ngừng phát triển các dịch vụ đề bãn cảm thấy dễ chịu và cảm thấy thoải mái khi sử dụng.Luôn lắng nghe phản hồi từ bạn và đưa ra định hướng trong tương lai.</p>
            </div>

        </div>
    </div>
</section>

<!-- Gallery section -->
<section id="gallery" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                        <h2>Quà Tặng</h2>
                        <h4>Bạn sẽ được chọn 1 món quà khi đổi gas</h4>
                    </div>
                </div>

                <!-- iso section -->
                <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

                    <ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">Tất cả</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".gasStove">Bếp gas</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".householdAppliances">Đồ dùng gia đình</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".Spice">Gia vị</a></li>
                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                        <div class="iso-box-wrapper col4-iso-box">

                            <div class="iso-box gasStove col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gift1.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gift1.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Bếp gas mini</h3>
                            </div>

                            <div class="iso-box gasStove col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gift2.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gift2.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Bếp đôi</h3>
                            </div>

                            <div class="iso-box householdAppliances col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gift3.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gift3.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Bộ chén dĩa</h3>
                            </div>

                            <div class="iso-box Spice col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gift4.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gift4.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Nước tương</h3>
                            </div>

                            <div class="iso-box Spice col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gift5.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gift5.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Bột ngọt</h3>
                            </div>

                            <div class="iso-box Spice col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gift6.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gift6.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Dầu ăn</h3>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<section id="store" class="parallax-section">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <iframe src="https://www.google.com/maps/embed/v1/view?key=AIzaSyAJifc7pwvUkN0yrtn7BPn8I-lRg33PSNc&center=10.75,106.6666667&zoom=11&maptype=satellite" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form contact-form">
                    <h2>Hệ thống cửa hàng</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên cửa hàng</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td scope="row">Cửa Hàng Số 1</td>
                            <td scope="row">268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM</td>
                            <td scope="row">010-0230-040</td>
                        </tr>
                        <tr>
                            <td scope="row">1</td>
                            <td scope="row">Cửa Hàng Số 1</td>
                            <td scope="row">268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM</td>
                            <td scope="row">010-0230-040</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact section -->
<section id="contact" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Gửi phản hồi</h2>
                    <h4>Chúng tôi luôn sẵn sàng phục vụ bạn!</h4>
                </div>
                <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
                    <form id="contact-form" method="post" action="#">
                        <input name="name" type="text" class="form-control" placeholder="Họ và tên" required>
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                        <textarea name="message" class="form-control" placeholder="Nội dung" rows="5" required></textarea>
                        <input type="submit" class="form-control submit" value="Gửi">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer section -->
<footer>
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>Mạng xã hội</h3>
                <ul class="social-icons">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-youtube-play"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-amazon"></a></li>
                </ul>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Chi tiết liên hệ</h3>
                <p>268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh</p>
                <p>010-0230-040</p>
                <p>ltweb-bachkhoa@hcmut.com</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>Giờ mở cửa</h3>
                <strong>Thứ 2 - Thứ 7</strong>
                <p>07:00 - 22:00</p>
                <strong>Chủ nhật  và Ngày lễ</strong>
                <p>07:00 - 18:00</p>
            </div>

        </div>
    </div>
</footer>

<!-- scrolltop section -->
<section id="gototop">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-4 text-right">
                <a href="#home" class="gototop"><i class="fa fa-angle-up"></i></a>
            </div>

        </div>
    </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>
