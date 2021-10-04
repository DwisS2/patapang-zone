<?php include("config.php"); 
session_start();?>


<!DOCTYPE html>
<html>
  <head>
    <title>Patapang Zone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles_form.css" rel="stylesheet">

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
	                 <h1><a href="#">Patapang Zone Dashboard</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                     <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <?php echo $_SESSION["username"];?><b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="logout.php">Logout</a></li>
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
                            <li><a href="table_masalah.php">Trouble</a></li>
                            <li><a href="table_saran.php">Saran</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>

			<!-- DIV BAGIAN TABLE -->
		  	<!-- DIV BAGIAN TABLE -->
		  	<!-- DIV BAGIAN TABLE -->

		  <div class="col-md-10">
  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Judul</th>
								<th>Pesan</th>
								<th>Option</th>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT * FROM saran";
								$query = mysqli_query($db, $sql);
								
								while($admin = mysqli_fetch_array($query)){
									echo "<tr >";
									
									echo "<td >".$admin['id']."</td>";
									echo "<td >".$admin['nama']."</td>";
									echo "<td >".$admin['email']."</td>";
									echo "<td >".$admin['judul']."</td>";
									echo "<td >".$admin['pesan']."</td>";

									echo "<td>";

									echo "<a href='table_saran_delete.php?id=".$admin['id']."' class='btn btn-danger'>Delete</a>";
									echo "</td>";
									
									echo "</tr>";
								}?>


						</tbody>
					</table>
  				</div>
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

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>