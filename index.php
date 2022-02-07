
<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="css/navbar.css"> -->
    <!-- <script src="js/navbar.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/services.css">
    <title>TỰ LÁI DIỄN CHÂU</title>
    <!-- //navbar -->
    <link rel="stylesheet" href="css/navbarCSS/css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/navbarCSS/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Carousel.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!--footer-->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


</head>
<style>
    .carousel .item>img {
        position: absolute;
        top: 0;
        left: 0;
        max-width: 100%;
        height: 100%;
    }

    .carousel-inner>.item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 500px;
    }
</style>

<body>
    <?php
    include_once('layout/navbar.php');
    ?>
    <section class="home">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-controls">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active" style="background-image:url('https://hyundaiphamvandong.net/wp-content/uploads/2017/01/banner-xe-hyundai-santafe-2019.jpg')"></li>
                    <li data-target="#carousel" data-slide-to="1" style="background-image:url('img/ban1.jpg')"></li>
                    <li data-target="#carousel" data-slide-to="2" style="background-image:url('img/ban2.jpg')"></li>
                    <li data-target="#carousel" data-slide-to="3" style="background-image:url('https://hyundaisonghan.com.vn/wp-content/uploads/2016/11/H100-banner-web-01.jpg')"></li>
                </ol>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <img src="img/left-arrow.svg" alt="Prev">
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <img src="img/right-arrow.svg" alt="Next">
                </a>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('https://hyundaiphamvandong.net/wp-content/uploads/2017/01/banner-xe-hyundai-santafe-2019.jpg')">
                    <!-- <div class="container">
                        <h2>I'm Rose</h2>
                        <p>Web Developer</p>
                    </div> -->
                </div>
                <div class="carousel-item" style="background-image:url('img/ban1.jpg')">
                    <!-- <div class="container">
                        <h2>I'm Jasmine</h2>
                        <p>Web Developer</p>
                    </div> -->
                </div>
                <div class="carousel-item" style="background-image:url('img/ban2.jpg')">
                    <!-- <div class="container">
                        <h2>I'm Ruby</h2>
                        <p>Web Developer</p>
                    </div> -->
                </div>
                <div class="carousel-item" style="background-image:url('https://hyundaisonghan.com.vn/wp-content/uploads/2016/11/H100-banner-web-01.jpg')">
                    <!-- <div class="container">
                        <h2>I'm Ruby</h2>
                        <p>Web Developer</p>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <div class=" row content col-md-12 justify-content-center" style="margin-bottom: 100px;margin-top: 100px;">
        <!-- <h3 class="row justify-content-center fw-bold">Lựa chọn đẳng cấp nhất</h3> -->
        <div class="col-md-3">
            <div id="col-1044827431" class="col cot1 medium-4 small-12 large-4">
                <div class="col-inner">
                    <p class="text-top text-primary" style="font-size: 40px;">Chúng tôi có</p>
                    <h1 class="tieu-de">Tất Cả Những Gì Bạn Cần</h1>
                </div>
            </div>
        </div>
        <div class="space col-md-1">
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold">TuLaiDienChau: Nơi đặt niềm tin</h3>
            <h5 class="fw-lighter">TuLaiDienChau với nhiều năm kinh nghiệm trong lĩnh vực tư vấn và mua bán. Chúng tôi tự tin cung cấp các dòng xe của các hãng nổi tiếng như: Honda, Mazda, Mitsubishi, Ford, Huyndai,...</h5>
            <h5 class="fw-lighter">Chúng tôi tự hào mang tới cho khách hàng những chiếc xe tốt nhất, dịch vụ tốt nhất, tiết kiệm nhất.</h5>
        </div>

    </div>

    <div class="product-collection">
        <div class="container1">
            <div class="product-collection-wrapper">
                <!-- product col left -->
                <div class="product-col-left flex">
                    <div class="product-col-content">
                        <h2 class="md-title">VỀ CHÚNG TÔI </h2>
                        <p class="text-light">Chúng tôi sẽ luôn cố gắng và không
                            ngừng hoàn thiện nhằm đem đến khách hàng chất lượng và trải nghiệm tốt nhất, Xây dựng
                            một
                            phong cách chuyên nghiệp, phục vụ tất cả mọi nhu cầu của các quý khách hàng</p>
                    </div>
                </div>

                <!-- product col right -->
                <div class="product-col-right">
                    <div class="product-col-r-top flex">
                        <div class="product-col-content">
                            <h2 class="md-title">Về dịch vụ</h2>
                            <p class="text-light">Chúng tôi đã có nhiều năm hoạt động và đã
                                được rất nhiều khách hàng đánh giá cao về cách chúng tôi làm việc</p>
                        </div>
                    </div>

                    <div class="product-col-r-bottom">
                        <!-- left -->
                        <div class="flex">
                            <div class="product-col-content">
                                <h2 class="md-title">Dịch vụ Đa dạng </h2>
                                <p class="text-light">Quý khách hàng có thể lựa chọn rất nhiều loại hình dịch vụ
                                    khác nhau và thoải mái lựa chọn các loại xe từ 4 - 24
                                    chỗ, đầy đủ tiện nghi và an toàn. Phù hợp với mọi nhu cầu của bản thân và gia
                                    đình.</p>
                                <a href="#"><button type="button" onclick="smoothScroll(document.getElementById('second'))" class="btn-dark">XEM NGAY</button></a>
                                <script>
                                    window.smoothScroll = function(target) {
                                        var scrollContainer = target;
                                        do { //find scroll container
                                            scrollContainer = scrollContainer.parentNode;
                                            if (!scrollContainer) return;
                                            scrollContainer.scrollTop += 1;
                                        } while (scrollContainer.scrollTop == 0);

                                        var targetY = 0;
                                        do { //find the top of target relatively to the container
                                            if (target == scrollContainer) break;
                                            targetY += target.offsetTop;
                                        } while (target = target.offsetParent);

                                        scroll = function(c, a, b, i) {
                                            i+=10;
                                            if (i > 50) return;
                                            c.scrollTop = a + (b - a) / 50 * i;
                                            setTimeout(function() {
                                                scroll(c, a, b, i);
                                            }, 2);
                                        }
                                        // start scrolling
                                        scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flex">
                            <div class="product-col-content">
                                <h2 class="md-title">Tiết kiệm chi phí</h2>
                                <p class="text-light">Chúng tôi cung cấp cho Quý khách hàng các dịch vụ tốt
                                    nhất với chi phí tiết kiệm nhất, phù hợp với tất cả mọi yêu cầu tài chính và theo như mong ước đã đề ra
                                    của các Quý khách hàng.
                                </p>
                                <button type="button" class="btn-dark">GIÁ THÀNH RẺ NHẤT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-md-12 justify-content-center mt-5" style="margin-bottom: 200px;">
        <div class="col-inner text-center mb-3">
            <h2><span style="color: #437eeb;">Đăng ký nhận tư vấn</span></h2>
            <h2>Chúng tôi luôn luôn lắng nghe từ khách hàng</h2>
        </div>

        
        <!-- form -->
        <div class="left col-md-5 col-sm-10" style="height: 500px;">
            <form action="?action=send" method="POST">
                <div class="form-group">
                    <label for="name" hidden>Họ và tên <span>*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Họ và tên *" required="">
                </div>
                <div class="form-group">
                    <label for="name" hidden>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email *" value="" required="">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="sdt" hidden>Số điện thoại</label>
                    <input type="number" name="phone" class="form-control" placeholder="Số điện thoại *">
                </div>
                <div class="form-group">
                    <label for="address" hidden>Nội dung</label>
                    <textarea class="form-control" rows="3" name="content" placeholder="Nội dung"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Đăng kí nhận tư vấn</button>
            </form>
        </div>

        <div class="space col-md-1 col-sm-10"></div>
        <div class="right map col-md-3 col-sm-10" style="height: 500px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.2672364699014!2d105.5899238292266!3d18.972562267445205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84e82ebf902dde10!2zMTjCsDU4JzIxLjIiTiAxMDXCsDM1JzI1LjciRQ!5e0!3m2!1svi!2sus!4v1641657097450!5m2!1svi!2sus" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <main>
        <header class="text d-flex justify-content-center" style="margin-top: 30px;">
            <h1>Dịch vụ</h1>
        </header>
    </main>



    <?php
    include_once('layout/services.php');
    include_once('layout/footer.php');
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="js/navbar.js"></script> -->

    <script src="js/navbarJS/jquery-3.3.1.min.js"></script>
    <script src="js/navbarJS/popper.min.js"></script>
    <script src="js/navbarJS/bootstrap.min.js"></script>
    <script src="js/navbarJS/jquery.sticky.js"></script>
    <script src="js/navbarJS/main.js"></script>
</body>

</html>

<?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
if (isset($_GET['action']) && $_GET['action'] == "send") {
            if (empty($_POST['email'])) { //Kiểm tra xem trường email có rỗng không?
                $error = "Bạn phải nhập địa chỉ email";
            } elseif (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error = "Bạn phải nhập email đúng định dạng";
            } elseif (empty($_POST['content'])) { //Kiểm tra xem trường content có rỗng không?
                $error = "Bạn phải nhập nội dung";
            }
            if (!isset($error)) {
                include 'SMTPConfig.php'; // include the library file
                require 'vendor/autoload.php';
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "tulaidienchau");
                    // $mail->addAddress('hienbia333@gmail.com', "Hien bia"); 
                    $mail->addAddress('vuhoanglinh15102001@gmail.com', 'admin');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, $name);
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'THÔNG TIN NGƯỜI CẦN CONTACT';
                    $mail->Body = $_POST['name'].' '.$_POST['content'].' '.$_POST['phone'];
                    $mail->AltBody = $_POST['content']; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
        }
?>
