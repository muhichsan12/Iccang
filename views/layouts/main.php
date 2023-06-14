<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- font family -->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Raleway:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <?php $this->head() ?>
</head>     
<body>
<?php $this->beginBody() ?>

     <!-- svg section start -->
     <div class="svg_section_main">
         <div class="banner_bg">
            <img src="images/banner-bg.png">
         </div>
         <!--header section start -->
         <div class="header_section">
            <div class="container">
               <div class="main">
                  <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_">
                           <div class="menu_main">
                              <ul>
                                 <li><img src="images/user-icon.png"></li>
                                 <li><a href="#">login</a></li>
                              </ul>
                           </div>
                           <div class="shoping_bag"><img src="images/search-icon.png"></div>
                        </div>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="#index.html">Home</a>
                              <a href="#services.html">Services</a>
                              <a href="#about.html">About</a>
                              <a href="#stories.html">Stories</a>
                              <a href="#team.html">Team</a>
                              <a href="#contact.html">Contact Us</a>
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->

         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="banner_taital">Launch <br>Your App <br>with creativity</h1>
                     <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                     <div class="btn_main">
                        <div class="contact_bt_1"><a href="#"><span class="contact_padding"><img src="images/plus-icon.png"></span>Discover</a></div>
                        <div class="contact_bt active"><a href="contact.html">Contact Now</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div><img src="images/banner-img.png" class="image_1"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
       






        <main>
            <?=$content?>
        </main>



              <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <h3 class="subscribe_text">Subscribe</h3>
            <div class="mail_main">
               <input type="text" class="email_text" placeholder="Enter Your email" name="Enter Your email">
               <div class="right_arrow">
                  <i class="fa fa-long-arrow-right" style="font-size:24px"></i>
               </div>
            </div>
            <div class="footer_taital_main">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="footer_logo"><img src="images/footer-logo.png"></div>
                     <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of </p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Navigation</h2>
                     <div class="footer_menu">
                        <ul>
                           <li class="active"><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="location.html">Location</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="features.html">Features</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Contact Info</h2>
                     <h4 class="addres_link">Mantain Office Address:</h4>
                     <h4 class="addres_link_1"><a href="#"><img src="images/map-icon.png"><span class="padding_left_20"> New York, NY 36524</span></a></h4>
                     <h4 class="addres_link">Customer Service:</h4>
                     <h4 class="addres_link_1"><a href="#"><img src="images/call-icon.png"><span class="padding_left_20">+( +01 1234567890 )</span></a></h4>
                     <h4 class="addres_link_1"><a href="#"><img src="images/mail-icon.png"><span class="padding_left_20">demo@gmail.com</span></a></h4>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Discover</h2>
                     <div class="discover_menu">
                        <ul>
                           <li><a href="#">Help</a></li>
                           <li><a href="#">How It Works</a></li>
                           <li><a href="#">subscribe</a></li>
                           <li><a href="#">Contact Us</a></li>
                        </ul>
                     </div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      











<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>