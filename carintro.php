<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Về chúng tôi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/carintro.css" />

    <!--navbar-->
    <link rel="stylesheet" href="css/navbarCSS/css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/navbarCSS/css/bootstrap.min.css">
    <!-- SLIDER -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/sliderIntro.css">

    <!--footer-->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <?php
    include_once('layout/navbar.php');
    ?>
    <main>
        <section class="about section" id="about">
            <div class="container">
                <div class="section-header">
                    <h3 class="title">Thông tin</h3>
                </div>

                <div class="section-body grid-2">
                    <div class="column-1">
                        <h3 class="title">Về dịch vụ</h3>
                        <p class="info-text">
                            Chúng tôi luôn cố gắng nâng cao chất lượng dịch vụ và đáp ứng tốt hơn các yêu cầu của quý
                            khách hàng,
                            . Nếu khách hàng có bất kỳ thắc mắc hoặc
                            đóng góp nào, xin vui lòng liên hệ với chúng tôi theo thông tin dưới đây. Chúng tôi sẽ phản
                            hồi lại Quý khách trong thời gian sớm nhất.

                        </p>
                    </div>


                </div>
            </div>
        </section>
        <div class="wrapper">
            <div class="carousel owl-carousel">
                <div class="card card-1">
                    <img src="https://f3.photo.talk.zdn.vn/2321216982936177584/124fd249a5ca6f9436db.jpg">
                </div>
                <div class="card card-2">
                    <img src="img/XeBan/c2.1.jpg">
                </div>
                <div class="card card-3">
                    <img src="img/cI1.jpg">
                </div>
                <div class="card card-4">
                    <img src="img/cI2.jpg">
                </div>
                <div class="card card-5">
                    <img src="img/cI3.jpg">
                </div>
            </div>
        </div>
        <script>
            $(".carousel").owlCarousel({
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false
                    }
                }
            });
        </script>
        <section class="contact" id="contact">
            <div class="container">
                <div class="contact-box">
                    <div class="contact-info">
                        <h3 class="title">Liên hệ </h3>

                        <div class="information-wrap">
                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p class="info-text">Quốc lộ 7A gần khu đô thị Hoàng Sơn - Thị Trấn Diễn Châu - Nghệ An</p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <p class="info-text">hienbia333@gmail.com</p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p class="info-text">0979.253.486 hoặc 0971.557.017</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="index.php"><button type="button" id="buu" class="btn btn-danger btn-lg" style="
                        display: block;margin: auto;margin-bottom: 40px;">Quay về trang chủ</button></a>
        <section class="hireme" id="hireme">
            <div class="container">
                <h3 class="title" style="text-align: center;">Chúc các quý khách hàng sẽ có những trải nghiệm vui vẻ!</h3>
            </div>
            <!-- <a href="#" class="btn">Tham khảo ngay</a> -->
        </section>
    </main>
    <hr>
    <?php
    include_once('layout/footer.php');
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>

    <!-- navbar -->
    <script src="js/navbarJS/jquery-3.3.1.min.js"></script>
    <script src="js/navbarJS/popper.min.js"></script>
    <script src="js/navbarJS/bootstrap.min.js"></script>
    <script src="js/navbarJS/jquery.sticky.js"></script>
    <script src="js/navbarJS/main.js"></script>
</body>

</html>