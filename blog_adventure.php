<?php include("config.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Patapang Zone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Zone<br><small>Patapang</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="category.php" class="nav-link">Category</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Suggestion</a></li>
            <li class="nav-item"><a href="trouble.php" class="nav-link">Trouble</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/adventure.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Adventure</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Category</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Browse Adventure Category</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <?php 
                         
                          $sql = "SELECT * FROM game WHERE g_kategori='Adventure' ORDER BY g_id DESC";
                          $query = mysqli_query($db, $sql);
                          $rows= array();
                          while($recipe = mysqli_fetch_array($query))
                            $rows[] = $recipe;
                          ?>            
            <?php foreach ($rows as $recipes) : ?>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              

              <a href='blog-single.php?g_id="<?php echo $recipes['g_id'] ?>"' class="block-20" >
                <img class="card-img-top" width='370' height='280' src="../patapangzone/images/gamezone/<?php echo $recipes['g_gambar'] ?>">
              </a>

              
              <div class="text py-4 d-block">
                
                <h3 class="heading mt-2"><a href='blog-single.php?g_id="<?php echo $recipes['g_id'] ?>"'><?php echo $recipes['g_nama'] ?> </a></h3>
                <p><?php echo substr( $recipes['g_deskripsi1'],0,200)." ...." ?></p>


                <div class="meta">  
                  <div><a href="#"><?php echo $recipes['waktu'] ?></a></div>
                </div>
              </div>
            </div>
          </div>
          
           <?php endforeach; ?>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/wallpaperlong.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="flaticon-medal"></span></div>
                    <strong class="number" data-number="85">0</strong>
                    <span>Total of Game</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="flaticon-laugh"></span></div>
                    <strong class="number" data-number="10567">0</strong>
                    <span>Happy Gamers</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      
<footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live patapang zone.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Request and Suggestion</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/letter.png);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Have a Trouble ? Tell Us !</a></h3>
                  <div class="meta">
                    <div><a href="trouble.php"><span class="icon-heart"></span> Visit</a></div>
                    
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/paper-plane.png);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Send Us Suggestion or Message</a></h3>
                  <div class="meta">
                    <div><a href="contact.php"><span class="icon-heart"></span> Visit</a></div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Category</h2>
              <ul class="list-unstyled">
                <li><a href="blog_action.php" class="py-2 d-block">Action</a></li>
                <li><a href="blog_horror.php" class="py-2 d-block">Horror</a></li>
                <li><a href="blog_racing.php" class="py-2 d-block">Racing</a></li>
                <li><a href="category.php" class="py-2 d-block">And Many More</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">In People Heart</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">patapang@zone.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>