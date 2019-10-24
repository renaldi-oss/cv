<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url('assets/img/favicon.png'); ?>">
    <!-- Author Meta -->
    <meta name="author" content="Reynaldi ">
    <!-- Meta Description -->
    <meta name="description" content="Curriculum Vitae Reynaldi">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Curriculum Vitae, CV, Resume">

    <title><?php echo SITE_NAME; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome.min.css'); ?>">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/simple-line-icons.css'); ?>">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/slicknav.css'); ?>">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nivo-lightbox.css'); ?>" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css'); ?>">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css'); ?>">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="contents">
                <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Hi This is</h5>
                <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s"><?= $home['name']; ?></h2>
                <p class="script-font wow fadeInUp" data-wow-delay="0.6s"><?= $home['moto']; ?></p>
                
                <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                  <li>
                    <a class="facebook" href="#" target="_blank"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="https://twitter.com/cik__gu" target="_blank"><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="https://www.instagram.com/dianpw/" target="_blank"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                    <a class="linkedin" href="#" target="_blank"><i class="icon-social-linkedin"></i></a>
                  </li>
                </ul>
                <?php
                $str = "https://wa.me/6281358141419?text=Hallo *Reynaldi*, Saya tertarik dengan CV kamu.";
                $ganti = str_replace(" ", "%20", $str);
                ?>
                <div class="header-button wow fadeInUp" data-wow-delay="1s">
                  <a href="<?php echo $ganti; ?>" target="_blank" class="btn btn-common">Chat Me on Whatsapp</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="assets/img/about/default.jpg" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>Hi Guys!</h3>
              <p><?= $home['resume']; ?></p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> Name </span> <span class="pro-detail"><?= $home['name']; ?></span></li>
                  <li><span class="pro-title"> Sex </span> <span class="pro-detail"><?= $home['sex']; ?></span></li>
                  <li><span class="pro-title"> Place, Date of Birth </span> <span class="pro-detail"><?= $home['place'] . ', ' . $home['date']; ?></span></li>
                  <li><span class="pro-title"> Religion </span> <span class="pro-detail"><?= $home['religion']; ?></span></li>
                  <li><span class="pro-title"> Address </span> <span class="pro-detail"><?= $home['address']; ?></span></li>
                  <li><span class="pro-title"> Location </span> <span class="pro-detail"><?= $home['location']; ?></span></li>
                  <li><span class="pro-title"> e-mail </span> <span class="pro-detail"><?= $home['email']; ?></span></li>
                  <li><span class="pro-title"> Phone </span> <span class="pro-detail"><?= $home['phone']; ?></span></li>
                </ul>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <section id="services" class="services section-padding">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What I do</h2>
      <div class="container">
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon">
                <i class="icon-grid"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Full Stack Developer</a></h3>
                <p>Build front-end and back-end website and application</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="icon-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Graphic Design</a></h3>
                <p>Web desain, Movie & multimedia, Product identity, and Packaging  </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
              <div class="icon">
                <i class="icon-briefcase"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Business Branding</a></h3>
                <p>Build a business plan to meet the desired target company</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="icon-bubbles"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Consultancy</a></h3>
                <p>Providing advisory services in the area of ​​IT expertise</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Resume Section Start -->
    <div id="resume" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="education wow fadeInRight" data-wow-delay="0.3s">
              <ul class="timeline">
                <li>
                  <i class="icon-graduation"></i>
                  <h2 class="timelin-title">Education</h2>
                </li>
                <?php foreach ($education as $edu): ?>
                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?= $edu->nama ?></h3>
                    <span><?= $edu->tahun ?></span>
                    <p class="line-text"><?= $edu->keterangan ?></p>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="experience wow fadeInRight" data-wow-delay="0.6s">
              <ul class="timeline">
                <li>
                  <i class="icon-briefcase"></i>
                  <h2 class="timelin-title">Experience</h2>
                </li>
                <?php foreach ($experiencce as $exp): ?>
                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?= $exp->nama ?></h3>
                    <span><?= $exp->tahun ?></span>
                    <p class="line-text"><?= $exp->keterangan ?></p>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Resume Section End -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">        
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">My Remarkable Works</h2>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Print 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?= base_url('assets/img/gallery/img-1.jpg'); ?>" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="<?= base_url('assets/img/gallery/img-1.jpg'); ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?= base_url('assets/img/gallery/img-2.jpg'); ?>" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="<?= base_url('assets/img/gallery/img-2.jpg'); ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?= base_url('assets/img/gallery/img-3.jpg'); ?>" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="<?= base_url('assets/img/gallery/img-3.jpg'); ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?= base_url('assets/img/gallery/img-4.jpg'); ?>" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="<?= base_url('assets/img/gallery/img-4.jpg'); ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?= base_url('assets/img/gallery/img-5.jpg'); ?>" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="<?= base_url('assets/img/gallery/img-5.jpg'); ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?= base_url('assets/img/gallery/img-6.jpg'); ?>" alt=""/>
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="<?= base_url('assets/img/gallery/img-6.jpg'); ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- Counter Area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <?php foreach ($info as $info): ?>
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon"><i class="<?= $info->icon ?>"></i></div>
              <div class="counterUp"><?= $info->value ?></div>
              <p><?= $info->judul ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
              <ul class="social-icon">
              <li>
                    <a class="facebook" href="https://www.facebook.com/53N5451" target="_blank"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="https://twitter.com/cik__gu" target="_blank"><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="https://www.instagram.com/dianpw/" target="_blank"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                    <a class="linkedin" href="https://www.linkedin.com/in/dian-purwanto-1ab59362/" target="_blank"><i class="icon-social-linkedin"></i></a>
                  </li>
              </ul>
              <p>© 2019 <a href="https://maliki.id/" target="_blank"> MALIKI.ID</a> All Right Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.mixitup.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/wow.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.nav.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js'); ?>"></script>  
    <script src="<?= base_url('assets/js/nivo-lightbox.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slicknav.js'); ?>"></script>
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>
      
  </body>
</html>
