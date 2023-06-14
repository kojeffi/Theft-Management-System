<?php
// admin_dashboard.php

session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_username'])) {
  header("Location: admin_login.php");
  exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    a:hover {
  color: blueviolet;
}

    .glow {
      font-size: 20px;
      color: #fff;
      text-align: center;
      animation: glow 1s ease-in-out infinite alternate;
    }
    @-webkit-keyframes glow {
      from {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
      }
      to {
        text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
      }
    }
    </style>
     
     <!--    Start of connection to bootstrap js-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!--    End of connection bootstrap js-->

    <!--    start of connection to bootstrap css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
    <!--    End of connection to bootstrap css-->

    <!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->

</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand glow" href="index.php" style="margin-bottom: 5px;color: #fff;">

        <img class="rounded-circle" src="Images/img6.jpg" alt="Logo" 
        style="height: 60px;width: 60px;margin-left: 4px;">
        <b>Theft Management System Admin Dashboard</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Report.php" style="margin-left:50px;text-align: center;margin-top: 
            20px;color: #fff;"><h6><b>Update Report</b></h6></a>
          </li>   
    
      <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link" href="Theft Reported.php" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #fff;"><h6><b>Update Theft Reported</b></h6></a>
          </li>  
    </li>
      <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #fff;"><h6><b>Resolved Theft Cases </b></h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="index.php" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #fff;"><h6><b>Sign Out</b></h6></a>
          </li>
    </ul> 
    </div>
  </div>
</nav>
<br>
<div class="container">
      <h2 class =" text-dark text-center">Welcome: <?php echo $_SESSION['admin_username']; ?></h2>
      <!-- Add your dashboard content here -->
    </div>
 <br>
<h1 class="text-white text-center h1 text-warning glow">Registered Users</h1>
<hr>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table-bordered table-hover bg-secondary" style="border: 2px solid gray;">
            <tr style="background-color: #d1f4ff">
                <th>Name</th>
                <th>Email</th>
                <th>Registration Number</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
            //To fetch users,connect to the db
            require_once"Registration_handler.php";
            //prepare a select query
            $selectQuery ="SELECT `id`, `name`, `email`, `number`, `password`, `phone` FROM `users` WHERE 1";
            //use mysqli_query() to grab all the users
            $users = mysqli_query($con,$selectQuery);
            //use a loop to print the users
            foreach ($users as $user){
                $Name=$user["name"];
                $Email=$user["email"];
                $RegNo=$user["number"]; 
                $Password=$user["password"];
                $Phone=$user["phone"];
                $Id=$user["id"];
                echo"<tr>
              <td>$Name</td>
               <td>$Email</td>
               <td>$RegNo</td>
               <td>$Password</td>
               <td>$Phone</td>
              <td><a href='delete1.php?id=$Id'>Delete</a></td>
             <td><a href='update1.php?id=$Id&name=$Name&email=$Email&number=
             $RegNo&password=$Password&phone=$Phone&id=$Id'>Update</a></td>
             </tr>";
            }
            ?>
        </table>
 <div class="col-md-2"></div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="footer text-center bg-dark">
    <div class="container">
        <b class="copyright" style="color: #fff;">&copy; 2023 Brought To You By Puea Computer Science Student</b> All rights reserved.
    </div>
</div>
</body>
</html>
