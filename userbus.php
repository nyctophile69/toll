<?php include 'connection.php';
require 'session.php';

  ?>
<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
 
  Session::destroy();
  include 'login.php';
}


if (isset($_GET['action']) && $_GET['action'] == 'signin') {
 
  Session::destroy();
  $_POST['action'] ='logout';
  include 'register.php';
}



 ?>
 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toll gate system</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

  <?php include 'header2.php'?>
  <?php include 'sidebar2.php'?>
    <div id="wrapper">

      <!-- Sidebar -->
      
  
      <div id="content-wrapper">

        <div class="container-fluid">

           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Vehicle Name</th>
                                        <th>Vehicle Type</th>
                                        <th>Driver ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM vehicle';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['VEHICLE_NAME'].'</td>';
                            echo '<td>'. $row['VEHICLE_TYPE'].'</td>';
                            echo '<td>'. $row['DRIVER_ID'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
           </div></div></div>
    </div></body>
</html>
<?php include 'footer.php'; ?>