
<html>
<head>
  <style type="text/css">
.section.banner2 {height: 290px; background: #3d3d3d url('../img/trav2.jpg') center center no-repeat;}
.section.banner2 .wrapper {position: relative;}
.section.banner2 .hero {position: absolute; top: -89px; left: 177px; z-index: 999;}
.section.banner2 .button {
    display: block;
    position: absolute;
    top: 97px;
    left: 590px;
    margin: 0;
    background-image: linear-gradient(bottom, rgb(35,124,219) 0%, rgb(39,136,232) 16%, rgb(119,184,249) 100%);
    background-image: -o-linear-gradient(bottom, rgb(35,124,219) 0%, rgb(39,136,232) 16%, rgb(119,184,249) 100%);
    background-image: -moz-linear-gradient(bottom, rgb(35,124,219) 0%, rgb(39,136,232) 16%, rgb(119,184,249) 100%);
    background-image: -webkit-linear-gradient(bottom, rgb(35,124,219) 0%, rgb(39,136,232) 16%, rgb(119,184,249) 100%);
    background-image: -ms-linear-gradient(bottom, rgb(35,124,219) 0%, rgb(39,136,232) 16%, rgb(119,184,249) 100%);
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0, rgb(35,124,219)),
        color-stop(0.16, rgb(39,136,232)),
        color-stop(1, rgb(119,184,249))
    );
    -webkit-border-radius: 10px;
    border-radius: 10px;
    border: 5px solid #029af1;
    z-index: 0;
}
   .section.banner2 a {
    width: 200px;
    padding: 20px 20px 20px 50px;
    display: block;
    text-decoration: none;
    background: url(../img/banner-link-arrow.png) 100% 50% no-repeat;
    color: #FFF;
}
.section.banner2 a:hover {
    color: #ffe200;
}
.section.banner2 h2 {
    font-size: 18px;
    font-weight: normal;
    margin: 0;
    line-height: 1.3;
}
.section.banner2 p {
    color: #ffe200;
    font-style: italic;
    font-size: 14px;
    margin: 0;
}
</style> 
   
</head>
<?php 

require_once("inc/config.php");
include(ROOT_PATH . "inc/products.php");
$recent = get_products_recent();

$pageTitle = "visit with us ";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>
        <div class="section banner2">

            <div class="wrapper">
                 
                
                <div class="button">
                    <a href="<?php echo BASE_URL; ?>shirts.php">
                        <h2>Hey, I&rsquo;m Mike!</h2>
                        <p>Check Out these places!!</p>
                    </a>
                </div>
            </div>

        </div>

        <div class="section shirts latest">

            <div class="wrapper">

                <h2>latest additions</h2>
                

                <ul class="products">
                    <?php
                        foreach(array_reverse($recent) as $product) {
                            include(ROOT_PATH . "inc/partial-product-list-view.html.php");
                        }
                    ?>
                </ul>

            </div>

        </div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>
</html>