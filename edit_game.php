<?php 

include("config.php");

if( !isset($_GET['g_id']) ){
	// kalau tidak ada id di query string
	header('Location: table_game.php');
}

//ambil id dari query string
$g_id = $_GET['g_id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM game WHERE g_id=$g_id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Patapang Zone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="css/styles_form.css" rel="stylesheet">

    <link href="css/calendar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                  
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-cloud-upload"></i> Create
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="add_admin.php">Add Admin</a></li>
                            <li><a href="add_game.php">Add Game</a></li>
                        </ul>
                    </li>
                  
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Table Data
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="table_admin.php">Admin</a></li>
                            <li><a href="table_game.php">Game</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>


		  	<!-- CONTEEENT -->
		  	<!-- CONTEEENT -->
		  	<!-- CONTEEENT -->

		
	  				<div class="col-md-10">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Edit Content</div>
					          
					            
					        </div>
					    
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form" action="edit_game_code.php" method="POST" enctype="multipart/form-data">
			  					<input type="hidden" name="g_id" value="<?php echo $data['g_id'] ?>" />
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="g_nama" id="inputEmail3" value="<?php echo $data['g_nama'] ?>" required="">
								      
								    </div>
								  </div>

								  <div class="form-group">
								    <label class="col-sm-2 control-label">Category</label>
								    <div class="col-sm-10">
												<select name="g_kategori" class="form-control">
													<option>Action</option>
													<option>Adventure</option>
													<option>Horror</option>		
													<option>Racing</option>
													<option>Shooter</option>
													<option>Sports</option>											
												</select>
											</div>
								  </div>

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Image</label>
								    <div class="col-sm-10">
								      <input type="file" name="g_gambar" class="form-control" id="inputPassword3" >
								    </div>
								  </div>

								  <div class="form-group">
								    <label class="col-sm-2 control-label">Paragraph 1 Content</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" name="g_deskripsi1" placeholder="Enter Article Content" rows="3"><?php echo $data['g_deskripsi1'] ?></textarea>
								    </div>
								  </div>

								  <div class="form-group">
								    <label class="col-sm-2 control-label">Paragraph 2 Content</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" name="g_deskripsi2" placeholder="Enter Article Content" rows="3"><?php echo $data['g_deskripsi2'] ?></textarea>
								    </div>
								  </div>
								  

								  <div class="form-group">
								    <label for="inputEmail3"  class="col-sm-2 control-label">Link</label>

								    <div class="col-sm-10">
								      
								      <input type="text" class="form-control" name="g_link" id="inputEmail3" value="<?php echo $data['g_link'] ?>" required="">
								    </div>
								  </div>

								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Submit</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
					</div>
				</div>
			</section>
		  			</div>


		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/fullcalendar/fullcalendar.js"></script>
    <script src="vendors/fullcalendar/gcal.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar.js"></script>
  </body>
</html>