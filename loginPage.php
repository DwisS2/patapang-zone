 
<?php

//index.php

session_start();

?>
<!DOCTYPE html>
<html>
 <head>
    <title>Patapang Zone</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
  <style>
  .form_style
  {
   width: 600px;
   margin: 0 auto;
  }
  </style>

 </head>
 <body>
  <br />
   <h3 align="center">Login Admin</h3>
  <br />


  <div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">
   <?php
   if(!isset($_SESSION["username"]))
   {
   ?>
   <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
    <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    {{alertMessage}}
   </div>



  <div class="panel panel-default"  ng-show="login_form">
    <div class="panel-heading">
     <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">
     <form role="form" method="post" ng-submit="submitLogin()">
      <div class="form-group">
       <label >Enter Your Username</label>
       <input class="form-control" name="username" placeholder="Username"  ng-model="loginData.username" type="text" autofocus="" />
      </div>
      <div class="form-group">
       <label size="35">Enter Your Password</label>
       <input class="form-control" name="password" placeholder="Password" ng-model="loginData.password" type="password" value="" />
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="login" class="btn btn-primary" value="Login" />
       
      </div>
     </form>
    </div>
   </div>



   <?php
   }
   else
   {
	   header("location:table_game.php");
   }
   ?>
  </div>

 </body>
</html>

<script>
var app = angular.module('login_register_app', []);
app.controller('login_register_controller', function($scope, $http){
 $scope.closeMsg = function(){
  $scope.alertMsg = false;
 };

 $scope.login_form = true;

 $scope.showLogin = function(){
  $scope.register_form = false;
  $scope.login_form = true;
  $scope.alertMsg = false;
 };

 $scope.submitLogin = function(){
  $http({
   method:"POST",
   url:"login.php",
   data:$scope.loginData
  }).success(function(data){
   if(data.error != '')
   {
    $scope.alertMsg = true;
    $scope.alertClass = 'alert-danger';
    $scope.alertMessage = data.error;
   }
   else
   {
    location.reload();
   }
  });
 };

});
</script>


*