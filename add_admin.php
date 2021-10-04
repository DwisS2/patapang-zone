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

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">
        <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

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


		  <div class="col-md-10">
	  			<div ng-app="login_register_app" ng-controller="login_register_controller" >
              <?php ?>
                      <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
                            <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
                            {{alertMessage}}
                      </div>

            <div class="content-box-large" ng-show="register_form">
                            
                      <div class="panel-heading">
                          <div class="panel-title">Create Admin Account</div>
                      </div>       
                <div class="panel-body">
                      <form class="form-horizontal" role="form" method="post" ng-submit="submitRegister()">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">
                                <font size="-1">Username</font>
                              </label>

                              <div class="col-sm-10">
                                <input type="text" placeholder="Username" name="username" ng-model="registerData.username" class="form-control" autofocus="">
                              </div>
                            </div>
        
                            <div class="form-group">
                              
                    <label class="col-sm-2 control-label">
                        <font size="-1">Password</font>
                    </label>
                              <div class="col-sm-10">
                                <input type="password" placeholder="Password" name="password" ng-model="registerData.password" class="form-control" value="" >
                              </div>
                            </div>

                            <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="register" class="btn btn-primary" >Submit</button>
                                  </div>
                             </div>
                      </form>
                </div>   
            </div>
              <?php ?>
      </div>
                         
    </div>

	  			
	  		<!--  Page content -->
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

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>

<script>
    var app = angular.module('login_register_app', []);
    app.controller('login_register_controller', function($scope, $http){
     $scope.closeMsg = function(){
      $scope.alertMsg = false;
     };

     $scope.register_form = true;

     $scope.submitRegister = function(){
      $http({
       method:"POST",
       url:"add_admin_code.php",
       data:$scope.registerData
      }).success(function(data){
       $scope.alertMsg = true;
       if(data.error != '')
       {
        $scope.alertClass = 'alert-danger';
        $scope.alertMessage = data.error;
       }
       else
       {
        $scope.alertClass = 'alert-success';
        $scope.alertMessage = data.message;
        $scope.registerData = {};
       }
      });
     };
    });
    </script>

  </body>
</html>