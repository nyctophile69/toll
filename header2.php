<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."\Session.php";
Session::init();



spl_autoload_register(function($classes){

  include ''.$classes.".php";

});


$users = new Users();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Toll gate management</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    

<!-- Page level plugin CSS-->


<!-- Custom styles for this template-->

  </head>
  <body>


<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  // Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  // <strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}



 ?>
 

    <div class="" >

      <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header" >
       
      
        <b><a class="navbar-brand" href="index.php"><i class="fas fa-logo mr-2"></i>Toll gate management</a></b>

  <a class="nav-link" href="contact.php" style="color:white; "><i class="fa fa-fw fa-envelope"></i> Contact</a>
     <a class="nav-link" href="about.php"style="color:white;"><i class="fa fa-fw fa-address-book "></i> About</a>
     
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
    
   
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">



          <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
              <li class="nav-item">

                  <a class="nav-link" href="index2.php" style="color:white;"><i class="fas fa-users mr-2"></i>User lists </span></a>
              </li>
              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">

                <a class="nav-link" href="addUser.php" style="color:white;"><i class="fas fa-user-plus mr-2"></i>Add user </span></a>
              </li>
            <?php  } ?>
            <li class="nav-item
            <?php

      				$path = $_SERVER['SCRIPT_FILENAME'];
      				$current = basename($path, '.php');
      				if ($current == 'profile') {
      					echo "active ";
      				}

      			 ?>

            ">

              <a class="nav-link" style="color:white;" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="?action=logout" style="color:white;"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </li>
          <?php }else{ ?>

              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'register') {
                            echo " active ";
                          }

                         ?>">
                <a class="nav-link" href="register.php" style="color:white;"><i class="fas fa-user-plus mr-2"></i>Register</a>
              </li>
              <li class="nav-item
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
                <a class="nav-link" href="login.php" style="color:white;"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
              </li>

          <?php } ?>


          </ul>

        </div>
      </nav>
      