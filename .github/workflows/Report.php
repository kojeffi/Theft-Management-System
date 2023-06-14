<?php
session_start();
if(!isset($_SESSION['email'])){  
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
body {
      background-color: black;
      font-family: sans-serif Verdana, Geneva, Tahoma, sans-serif;
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed">
  <div class="container-fluid">
    <a class="navbar-brand glow" href="#" style="margin-bottom: 5px;color: #000;">

        <img class="rounded-circle" src="Images/img6.jpg" alt="Logo" 
        style="height: 60px;width: 60px;margin-left: 4px;">
        <b class="text-white">Theft Management System</b></a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Home</b></h6></a>
          </li>
      <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>About</b></h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Gallery</b></h6></a>
          </li> 
          <li class="nav-item">
        <a class="nav-link" href="notification.php" style="text-align: center;">
          <i class="material-icons glow">notifications_active</i></a>
        </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Sign Out</b></h6></a>
          </li>     
    </ul> 
    </div>
  </div>
</nav>
<br>
<h1 class="text-center text-dark h3"><b>Welcome:</b>  <b><?php echo $_SESSION['email'];?></b>
   
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<div class="spinner-border text-muted text-center"></div>
<div class="spinner-border text-primary"></div>
<div class="spinner-border text-success"></div>
<div class="spinner-border text-info"></div>
<div class="spinner-border text-warning"></div>
<div class="spinner-border text-danger"></div>
<div class="spinner-border text-info"></div>
<div class="spinner-border text-dark"></div>
<div class="spinner-border text-light"></div>
        </div>
        <div class="col-md-4"></div>
    </div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <form method="post" class="rounded bg-dark" action="Theft.php" 
     style="background-color: rgba(87, 157, 179, 0.185);border:1px solid #57ffee;color:#000">
            <h1 class="text-info text-center text-primary h1">Submit Lost Item Or Found Item</h1>
            <br>
            <div class="row">
              <div class="col-md-1"></div>
            <div class="col-md-5">
                <label for="" style="color: #fff;">Name :</label>
                <input name="name" class="form-control" placeholder="Enter Your name" type="text"  required="">
            </div>
            <div class="col-md-5">
                <label for="" style="color: #fff;">Registration Number: </label>
                <input name="reg" class="form-control" placeholder="Enter Registration number" type="text"  required="">
                <br>
            </div>
            </div>
            <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label for="" style="color: #fff;">Phone Number:</label>
                    <input name="phone" class="form-control" placeholder="Enter phone number" type="number"  required="">
                </div>
                <div class="col-md-5">
                    <label for="" style="color: #fff;">Email:</label>
                    <input name="email" class="form-control" placeholder="Enter email" type="email" required="">
                </div>
                </div>
                <div class="col-md-1"></div>
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <label for=""style="color: #fff;">Gender:</label>
                <select name="gender"  class="form-control" id="gender"  required="">
                    <option value="" style="color: #fff;">Select Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-5">
                    <label for="inputPassword3" class="control-label"style="color: #fff;">Date you lost the Item</label>
                    <div class="form-control">
                        <input name="date" type="date" class="form-control" id="inputEmail3" placeholder="Enter..."  required="">
                    </div>
            </div>
            </div>
            <div class="col-md-1"></div>
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label for="" style="color: #fff;">Select Your Category:</label>
                      <select class="form-control" name="cate" id="">
                      <option value="Student">Student</option>
                      <option value="Teacher">Teacher</option>
                      <option value="Non Staff">Non Staff</option>
                      <option value="Visitor">Visitor</option>
                     </select><br>
                
                </div>
                <div class="col-md-5">
                    <label for=""style="color: #fff;">What are you missing?</label>
                    <textarea name="missing"class="form-control" id="message" 
                    placeholder="Descibe What your are Missing in Details" cols="45" rows="8"  required=""></textarea>
               </div>
               <div class="col-md-1"></div>
            </div>
               <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-5">
               <label for=""style="color: #fff;">Found Item Or Lost Item?</label>
               <select class="form-control" name="found" id="">
                      <option value="Found Item">Found Item</option>
                      <option value="Lost Item">Lost Item</option>
                     </select>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-1"></div>
               </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input class="btn-block btn btn-success form-control form-group"
                     name="btn-Add" value="Submit" type="submit">
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
<br><br>
<div class="footer text-center bg-dark">
    <div class="container">
      <br>
        <b class="copyright" style="color: #fff;">&copy; 2023 Brought To You By Puea Computer Science Students</b> All rights reserved.
   
      </div> 
      <br>
</div>
</body>
</html>