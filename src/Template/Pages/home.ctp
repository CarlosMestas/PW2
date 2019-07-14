<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;



$Description = 'Restaurant Manolo';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $Description ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('bootstrap/bootstrap.css') ?>
    <?= $this->Html->css('style.css') ?>
    
    
    
    <?= $this->Html->script(['jquery.js','bootstrap.min.js']);?>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<body>
  <!-- //banner -->
  <div class="banner-left-side" id="home">
    <!-- header -->
    <div class="headder-top">
      <!-- nav -->
      <nav>
        <div id="logo">
          <h1>
            <?php
        echo $this->Html->link(
        __('RM'),
          ['controller' => 'Pages', 'action' => 'index', '_full' => true]
          );
          ?>
          </h1>
        </div>
        <div class="sub-headder position-relative">
          <h6>
            <a href="index.html">Restaurant
              <br>Manolo</a>
          </h6>
        </div>
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
          <li class="active">
            <?php
        echo $this->Html->link(
        __('Home'),
          ['controller' => 'Pages', 'action' => 'index', '_full' => true]
          );
          ?>
          </li>
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#service">Services</a>
          </li>
          <li>
            <!-- First Tier Drop Down -->
            <!--<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
              <input type="checkbox" id="drop-2">
              <ul>
                <li><a href="gallery.html" class="drop-text">Gallery</a></li>
                <li><a href="menu.html" class="drop-text">Menu</a></li>
                <li><a href="recipe.html" class="drop-text">Recipes</a></li>
              </ul>
            </li>-->
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#blog">Blog</a>
            </li>
            <li>
              <a href="#contact">Contact Us</a>
            </li>
            <li>
              <a href="#contact">Contact Us</a>
            </li>
            <li>
            <?php
        echo $this->Html->link(
        __('Login'),
          ['controller' => 'Users', 'action' => 'login', '_full' => true]
          );
          ?>
          </li>
        </ul>
      </nav>
      <!-- //nav -->
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="main-banner text-center">
      <div class="container">
        <div class="social-icons mb-lg-4 mb-3">
          <ul>
            <li class="facebook">
              <a href="#">
                <span class="fa fa-facebook"></span>
              </a>
            </li>
            <li class="twitter">
              <a href="#">
                <span class="fa fa-twitter"></span>
              </a>
            </li>
            <li class="rss">
              <a href="#">
                <span class="fa fa-rss"></span>
              </a>
            </li>
          </ul>
        </div>
        <div class="banner-right-txt">
          <h5 class="mb-sm-3 mb-2">Good Food</h5>
          <h4>Restaurant Manolo </h4>
        </div>
        <div class="slide-info-txt">
          <p>Your guests and you are welcome to our restaurant. Taste the food of our land.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- //banner -->
  <!-- about -->
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">About Us</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="row">
        <div class="col-lg-5 video-info-img text-center position-relative">
          <div class="abut-img-w3l">
            <?php echo $this->Html->image('bb1.jpg', ['class' => 'img-fluid']);?>
            
          </div>
          <div class="abut-img-two">
            <?php echo $this->Html->image('bb2.jpg', ['class' => 'img-fluid']);?>
          </div>
        </div>
        <div class="col-lg-7 left-abut-txt ">
          <div class="about-right-grid">
            <h2 class="mb-3">Our food should be our medicine,Our medicine organics should be our food your health</h2>
            <p>delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet, consectetur adipiscing
              elit sed do eiusmod delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet,
              consectetur delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet, consectetur
              adipiscing elit sed do eiusmod delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum
              dolor sit amet, consectetur</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//about -->
  <!-- store-info -->
  <section class="store-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7 store-details">
          <h4 class="mb-3">Store Information</h4>
          <h6 class="mb-2">Since:1974</h6>
          <p>delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet, consectetur adipiscing
            elit sed do eiusmod delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet,
            consectetur delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet, consectetur
            adipiscing elit sed do eiusmod delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor
            sit amet, consectetur</p>
          <div class="view-buttn mt-md-4 mt-3">
            <a href="#blog">Read More</a>
          </div>
        </div>

        <div class="col-lg-5 store-image-right">
          <?php echo $this->Html->image('bb3.jpg', ['class' => 'img-fluid']);?>
        </div>
      </div>
    </div>
  </section>
  <!--//store-info -->
  <!-- service -->
  <section class="service py-lg-4 py-md-4 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Services</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <?php echo $this->Html->image('ab1.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            
            <div class="ser-text-wthree mt-3">
              <h4>
                Vegatables
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
             <?php echo $this->Html->image('ab2.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            <div class="ser-text-wthree mt-3">
              <h4>
                Fresh Fruits
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
             <?php echo $this->Html->image('ab3.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            <div class="ser-text-wthree mt-3">
              <h4>
                Garden Tillage
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
             <?php echo $this->Html->image('ab4.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            <div class="ser-text-wthree mt-3">
              <h4>
                Awesome Wheats
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
             <?php echo $this->Html->image('ab1.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            <div class="ser-text-wthree mt-3">
              <h4>
                Garden Tillage
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
             <?php echo $this->Html->image('ab2.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            <div class="ser-text-wthree mt-3">
              <h4>
                Agro Machinery
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//service -->
  <!-- vegetable-info -->
  <section class="veg-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7">
           <?php echo $this->Html->image('bb4.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
        </div>
        <div class="col-lg-5 veg-list-text">
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-lg-2 py-1 w3three-veg-org">
              <h6>$ 3.50</h6>
              <h5 class="my-2">BeetRoot</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
               <?php echo $this->Html->image('v1.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-2 py-1 w3three-veg-org">
              <h6>$ 2.75</h6>
              <h5 class="my-2">Tomato</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
               <?php echo $this->Html->image('v2.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-2 py-1 w3three-veg-org">
              <h6>$ 5.20</h6>
              <h5 class="my-2">Carrot</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
               <?php echo $this->Html->image('v4.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-2 py-1 w3three-veg-org">
              <h6>$ 3.00</h6>
              <h5 class="my-2">Berries</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
               <?php echo $this->Html->image('v4.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//vegetable-info -->
  <!-- gallery -->
  <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Gallery </h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="row gallery-info">
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal1">
              <?php echo $this->Html->image('g1.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal2">
               <?php echo $this->Html->image('bb2.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal3">
               <?php echo $this->Html->image('bb3.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal4">
               <?php echo $this->Html->image('g2.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal5">
               <?php echo $this->Html->image('g3.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal6">
               <?php echo $this->Html->image('g4.jpg', ['class' => 'img-fluid', 'alt' => 'news image']);?>
            </a>
          </div>
        </div>
      </div>
      <!-- popup-->
      <div id="gal1" class="popup-effect">
        <div class="popup">
            <?php echo $this->Html->image('g1.jpg', ['class' => 'img-fluid', 'alt' => 'Popup Image']);?>
            <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal2" class="popup-effect">
        <div class="popup">
          <?php echo $this->Html->image('bb2.jpg', ['class' => 'img-fluid', 'alt' => 'Popup Image']);?>
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal3" class="popup-effect">
        <div class="popup">
          <?php echo $this->Html->image('bb3.jpg', ['class' => 'img-fluid', 'alt' => 'Popup Image']);?>
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal4" class="popup-effect">
        <div class="popup">
          <?php echo $this->Html->image('g2.jpg', ['class' => 'img-fluid', 'alt' => 'Popup Image']);?>
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal5" class="popup-effect">
        <div class="popup">
          <?php echo $this->Html->image('g3.jpg', ['class' => 'img-fluid', 'alt' => 'Popup Image']);?>
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal6" class="popup-effect">
        <div class="popup">
          <?php echo $this->Html->image('g4.jpg', ['class' => 'img-fluid', 'alt' => 'Popup Image']);?>
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
    </div>
  </section>
  <!--//gallery -->
  <!-- blog -->
  <section class="blog py-lg-5 py-md-4 py-sm-3 py-3" id="blog">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Blog</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="row">
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <?php echo $this->Html->image('bb2.jpg', ['class' => 'img-fluid']);?>
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>JUL</li>
                  <li>15</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Health Benefits of a Raw Food </a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">12/4/2019</a>
                </li>
                <li>
                  <a href="#">3 Tags</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <?php echo $this->Html->image('bb3.jpg', ['class' => 'img-fluid']);?>
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>JUL</li>
                  <li>15</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Health Benefits of a Raw Food </a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">12/4/2019</a>
                </li>
                <li>
                  <a href="#">3 Tags</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <?php echo $this->Html->image('g4.jpg', ['class' => 'img-fluid']);?>
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>JUL</li>
                  <li>15</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Health Benefits of a Raw Food </a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">12/4/2019</a>
                </li>
                <li>
                  <a href="#">3 Tags</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//blog -->
  <section>
    <div class="container-fulid">
      <div class="address_mail_footer_grids">
        <iframe src="https://maps.google.com/maps?q=caracas%20arequipa%20peru&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
      </div>
    </div>
  </section>
  <!-- contact -->
  <section class="contact py-lg-4 py-md-4 py-sm-3 py-3" id="contact">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Get In Touch</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="contact-form">
        <form action="#" method="post">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="First Name" required="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Last Name" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Phone" required="">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="email" class="form-control" placeholder="Email" required="">
            </div>
          </div>
          <div class="form-group contact-forms">
            <textarea class="form-control" placeholder="Meassage" required=""></textarea>
          </div>
          <button type="submit" class="btn sent-butnn btn-lg">Send</button>
        </form>
      </div>
    </div>
  </section>
  <!-- footer -->
  <section class="footer-w3layouts-bottem py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      <div class="row ">
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Address</h4>
          <div class="bottom-para ">
            <div class="footer-office-hour">
              <ul>
                <li class="mb-2">
                  <h6>Address</h6>
                </li>
                <li>
                  <p>Melbourne,south Brisbane,
                    <br>QLD 4101,Aurstralia.</p>
                </li>
              </ul>
              <ul>
                <li class="my-2">
                  <h6>Phone</h6>
                </li>
                <li>
                  <p>+ 1 (234) 567 8901</p>
                </li>
                <li class="my-2">
                  <h6>Email</h6>
                </li>
                <li>
                  <p>
                    <a href="mailto:info@example.com">info@example.com</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Twitter Us</h4>
          <div class="footer-office-hour">
            <ul>
              <li>
                <p>sit amet consectetur adipiscing</p>
              </li>
              <li class="my-1">
                <p>
                  <a href="mailto:info@example.com">info@example.com</a>
                </p>
              </li>
              <li class="mb-3">
                <span class="font-italic">Posted 3 days ago.</span>
              </li>
              <li>
                <p>sit amet consectetur adipiscing</p>
              </li>
              <li class="my-1">
                <p>
                  <a href="mailto:info@example.com">info@example.com</a>
                </p>
              </li>
              <li>
                <span class="font-italic">Posted 3 days ago.</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">NewsLetter</h4>
          <div class="newsletter">
            <form action="#" method="post" class="d-flex">
              <input type="email" name="Your Email" class="form-control" placeholder="Your Email" required="">
              <button class="btn1">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
              </button>
            </form>
          </div>
          <div class="footer-office-hour mt-3">
            <p>vehicula velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula</p>
          </div>
        </div>
      </div>
      <!-- move icon -->
      <div class="text-center mt-lg-5 mt-md-4 mt-3">
        <a href="#home" class="move-top text-center mt-3">
          <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </a>
      </div>
      <!--//move icon -->
    </div>
  </section>
  <!--footer-copy-right -->
  <footer class="bottem-wthree-footer text-center py-md-4 py-3">
    <p>
      © 2019 Organic Store. All Rights Reserved | Design by
      <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
    </p>
  </footer>
  <!--//footer-copy-right -->

</body>

</html>
