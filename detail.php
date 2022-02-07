<?php
    require_once('db/dbhelper.php');
    $productId=$_GET['productId'];
    $product;
    $sqlProduct="select * from `product` where id=".$productId;
    $result=executeResult($sqlProduct);
           foreach($result as $item){
               $product=array(
                   'id' => $item['id'],
                   'image_url' => $item['image_url'],
                   'name' => $item['name'],
                   'price' => $item['price'],
                   'des' =>$item['description'],
                   'quantity' => $item['quantity'],
                   'sale' => $item['sale']
               );
           }
    $sqlImage="select * from `image` WHERE product_id=".$productId;
    $listImage=executeResult($sqlImage);

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- //navbar -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/navbarCSS/css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/navbarCSS/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!--footer-->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/detail.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
   
</head>
<style>
     body {
        line-height: 1.5;
        font-size: 87.5%;
        word-wrap: break-word;
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        padding: 0;
        border: 0;
        outline: 0;
    }
    
    html, body, #page {
        height: 100%;
    }
</style>
<body>
        <?php
            include_once('layout/navbar.php');
        ?>
        <div class = "main-wrapper">
            <div class = "container">
                <div class = "product-div">
                    <div class = "product-div-left">
                        <div class = "img-container">
                            <img src = "<?php echo($product['image_url']);?>" alt = "watch">
                        </div>
                        <div class = "hover-container">
                            <div><img src ="<?php echo($product['image_url']);?>"></div>
                            <?php
                                if(!empty($listImage)){
                                    foreach($listImage as $image){
                                        echo('<div><img src = "'.$image['image_url'].'" ></div>');
                                    }
                                }
                            ?>
                            <!-- <div><img src = "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2019-honda-civic-sedan-1558453497.jpg?crop=1xw:0.9997727789138833xh;center,top&resize=480:*"></div>
                            <div><img src = "https://dictionary.cambridge.org/vi/images/thumb/sports_noun_002_35307.jpg?version=5.0.203"></div>
                            <div><img src = "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2019-honda-civic-sedan-1558453497.jpg?crop=1xw:0.9997727789138833xh;center,top&resize=480:*"></div>
                            <div><img src = "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2019-honda-civic-sedan-1558453497.jpg?crop=1xw:0.9997727789138833xh;center,top&resize=480:*"></div>
                            <div><img src = "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2019-honda-civic-sedan-1558453497.jpg?crop=1xw:0.9997727789138833xh;center,top&resize=480:*"></div> -->

                        </div>
                    </div>
                    <div class = "product-div-right">
                        <span class = "product-name"><?php echo($product['name']);?></span>
                        <span class = "product-price">VND LIÊN HỆ</span>
                        
                        <p class = "product-description"><?php echo($product['des']);?></p>
                        <div class = "btn-groups">
                            <button type = "button" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>LIÊN HỆ</button>
                            <!-- <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include_once('layout/footer.php');
        ?>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
            crossorigin="anonymous" />
    <script src = "js/detail.js"></script>
    <script src="js/navbarJS/jquery-3.3.1.min.js"></script>
    <script src="js/navbarJS/popper.min.js"></script>
    <script src="js/navbarJS/bootstrap.min.js"></script>
    <script src="js/navbarJS/jquery.sticky.js"></script>
    <script src="js/navbarJS/main.js"></script>
</body>

</html>