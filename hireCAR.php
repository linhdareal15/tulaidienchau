<?php
session_start();
    require_once('db/dbhelper.php');
    $product;
    $dieukien=!empty($_GET['filter']);
    if(isset($_SESSION['product']) && !empty($_SESSION['product']) && $dieukien==1){
        $product=$_SESSION['product'];
    }else{
        $sql="select * from product";
        $product=executeResult($sql);
    }
    
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- product -->
    <!-- <link rel="stylesheet" href="css/product.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- //navbar -->
    <link rel="stylesheet" href="css/navbarCSS/css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/navbarCSS/css/bootstrap.min.css">
    <!-- footer -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
</head>
<style>
    /* body {
        line-height: 1.5;
        font-size: 87.5%;
        word-wrap: break-word;
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        padding: 0;
        border: 0;
        outline: 0;
    } */
    
    html, body, #page {
        height: 100%;
    }


    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    background: #e2ecf5;
}
/* .title{
    text-align: center;
    font-size: 36px;
    letter-spacing: 0.5rem;
    padding-top: 30px 0;
    border-bottom: #cc3000 2px solid;
} */
span.color{
    color: #cc3000;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    overflow: hidden;
    padding: 10px 20px;
    box-sizing: border-box;
}

.container1{
    position: relative;
    display: flex;
    justify-content: center;
    z-index: 10;
    align-items: center;
    flex-wrap: wrap;
}
.container1 .card{
    position: relative;
    width: 500px;
    height: 400px;
    margin: 20px 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 10px 25px #8e9ca0;
    background: rgb(255, 255, 255);
    backdrop-filter: blur(15px);
} 
.container1 .card::before{
    content: "";
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    clip-path: circle(36% at 100% 0%);
}
.container1 .card::after{
    content: "";
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    clip-path: circle(5% at 0% 10%);
}
.container1 .card .image{
position: relative;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
padding: 20px;
transition: ease-in-out .5s ;
}
.container1 .card:hover .image{
transform: translateY(-10px);
}
.container1 .card:hover h2{
    visibility: hidden;
    transition: ease-in-out .1s;
}
.container1 .card .image img{
    max-width: 400px;
    max-height: 250px;
    margin: 0 0 20px;
    transition: ease-in-out .5s;
}
.container1 .card:hover .image img{
    transform: translate(-20px, -40px) rotate(0deg) scale(1.1);
 }
 .container1 .card .image h2{
     color: rgb(0, 0, 0);
     margin-bottom: 20px;
 }
 .container1 .card .details{
     position:absolute;
     bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transition: ease-in-out .5s;
    opacity: 0;
    visibility: hidden;
 }
 .container1 .card .details .size, .container .card .details .color{
   display: flex;
   justify-content: center;
   align-items: center;
   padding: 8px 20px;
}
.container1 .card .details .size h3, .container .card .details .color h3{
    color: rgb(0, 0, 0);
}
.container1 .card .details .size span{
    width: 26px;
    height: 26px;
    text-align: center;
    display: inline-block;
    color: #ffff;
    background: rgb(0, 0, 0);
    margin: 0 5px;
    border-radius: 4px;
    cursor: pointer;
    transition: ease-in-out .5s;
}
.container1 .card .details .size span:hover{
    background: rgb(207, 230, 6);
}
.container1 .card .details .color span{
    width: 26px;
    height: 26px;
    text-align: center;
    display: inline-block;
    color: #000;
    background: rgb(255, 12, 12);
    margin: 0 5px;
    border-radius: 50%;
    cursor: pointer;
    transition: ease-in-out .5s;
}
.container1 .card .details .color span:nth-child(2){
    background: rgb(12, 255, 243);
}
.container1 .card .details .color span:nth-child(3){
    background: rgb(187, 255, 0);
}
.container1 .card .details .color span:nth-child(4){
    background: rgb(47, 10, 170);
}
.container1 .card .details a{
    text-align: center;
    background: rgb(0, 0, 0);
    padding: 10px;
    border-radius: 50px;
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-weight: bold;
    transition:  ease-in-out .5s;
}
.container1 .card .details a:hover{
    background: rgb(22, 22, 22);
}
.container1 .card:hover .details{
visibility: visible;
opacity: 1;
transform: translateY(-50px);
 
}
</style>
<body>
    <?php
        include_once('layout/navbar.php');
    ?>
  <section>
        <h2 class="title">XE <span class="color">THUÊ</span></h2>
        <!-- <h3>Responsive Product Card HTML and CSS</h3> -->

        <div class="container1">
            <div class="card">
                <div class="image">
                    <a href=""><img src="img/XeThue/kiaForte.jpg" alt=""></a>
                    <h2>KIA FORTE</h2>
                </div>
                <div class="details">
                    <div class="color1">
                        <h3></h3>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="">LIÊN HỆ</a>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href=""><img src="img/XeThue/toyotaVios.jpg" alt=""></a>
                    <h2>TOYOTA VIOS</h2>
                </div>
                <div class="details">
                    <div class="color1">
                        <h3></h3>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="">LIÊN HỆ</a>
                </div>
            </div>
            
            <div class="card">
                <div class="image">
                    <a href=""><img src="img/XeThue/huyndaiAccent.jpg" alt=""></a>
                    <h2>HYUNDAI ACCENT</h2>
                </div>
                <div class="details">
                    <div class="color1">
                        <h3></h3>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="">LIÊN HỆ</a>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href=""><img src="img/XeThue/fortuner.jpg" alt=""></a>
                    <h2>TOYOTA FORTUNER</h2>
                </div>
                <div class="details">
                    <div class="color1">
                        <h3></h3>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="">LIÊN HỆ</a>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href=""><img src="img/XeThue/fordranger.jpg" alt=""></a>
                    <h2>FORD RANGER</h2>
                </div>
                <div class="details">
                    <div class="color1">
                        <h3></h3>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="">LIÊN HỆ</a>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href=""><img src="img/XeThue/xe16cho.jpg" alt=""></a>
                    <h2>XE 16 CHỖ</h2>
                </div>
                <div class="details">
                    <div class="color1">
                        <h3></h3>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="">LIÊN HỆ</a>
                </div>
            </div>
        </div>
    </section>
    <?php
        include_once('layout/footer.php');
    ?>
    <script src="js/navbarJS/jquery-3.3.1.min.js"></script>
    <script src="js/navbarJS/popper.min.js"></script>
    <script src="js/navbarJS/bootstrap.min.js"></script>
    <script src="js/navbarJS/jquery.sticky.js"></script>
    <script src="js/navbarJS/main.js"></script>

</body>

</html>