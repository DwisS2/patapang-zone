<?php include("config.php"); 

$g_id = $_GET['g_id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM game WHERE g_id=$g_id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
  die("Data Not Found");
}

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

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3"><?php echo $data['g_nama'] ?> </h2>

            <p><?php echo $data['g_deskripsi1'] ?> </p>
            
            <p>
                <img src="../patapangzone/images/gamezone/<?php echo $data['g_gambar'] ?>" alt="" class="img-fluid">
            </p>

            <p><?php echo $data['g_deskripsi2'] ?> </p>
            

            <div class="form-group">
              <a href="<?php echo $data['g_link'] ?>"><input type="submit" value="Download"  class="btn py-3 px-4 btn-primary"></a>
            </div>

            
            
            
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
            

            


            <div class="pt-5 mt-5">
              


              <!-- END comment-list -->
              
             
            </div>

          </div> <!-- .col-md-8 -->


          <div class="col-md-4 sidebar ftco-animate">
            
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="blog_action.php">Action <span>[GO]</span></a></li>
                <li><a href="blog_adventure.php">Adventure <span>[GO]</span></a></li>
                <li><a href="blog_horror.php">Horror <span>[GO]</span></a></li>
                <li><a href="blog_racing.php">Racing <span>[GO]</span></a></li>
                <li><a href="blog_shooter.php">Shooter <span>[GO]</span></a></li>
                <li><a href="blog_sports.php">Sports <span>[GO]</span></a></li>
              </div>
            </div>

            

            <div class="sidebar-box ftco-animate">
              <h3>Tag Quote</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Become</a>
                <a href="#" class="tag-cloud-link">A</a>
                <a href="#" class="tag-cloud-link">Jedi</a>
                <a href="#" class="tag-cloud-link">Master</a>
                <a href="#" class="tag-cloud-link">Without</a>
                <a href="#" class="tag-cloud-link">Ever</a>
                <a href="#" class="tag-cloud-link">Leaving</a>
                <a href="#" class="tag-cloud-link">Home</a>
                
              </div>
            </div>

            
          </div>

        </div>
      </div>
    </section> <!-- .section -->

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