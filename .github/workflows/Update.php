<?php
//check if the update link has been clicked
if(isset($_GET["id"])){
    //start receiving the data from the link
    $receiveName=$_GET["name"];
    $receivePhone=$_GET["phone"];
    $receiveGender=$_GET["gender"];
    $receiveYearofstudy=$_GET["year of study"];
    $receiveRegNo=$_GET["Reg No"];
    $receiveEmail=$_GET["Email"];
    $receiveDate=$_GET["date"];
    $receivemissing=$_GET["Missing"];

}else{
    //redirect the user back to user.php for them to click on the update link
    header("location:Theft Reported.php");
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
      background-image: url("Images/img1.jpg");
      font-family: sans-serif Verdana, Geneva, Tahoma, sans-serif;
      background-size: cover;
      background-repeat: no-repeat;
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
<body>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark" style="border: 0.2px dotted #0b0c0c07;">
  <div class="container-fluid">
    <a class="navbar-brand glow" href="index.php" style="margin-bottom: 60px;color: #000;">

        <img class="rounded-circle" src="Images/img6.jpg" alt="Logo" 
        style="height: 60px;width: 60px;margin-left: 4px;">
        <b>Theft Management System</b></a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Theft Reported.php" style="margin-left:50px;text-align: center;margin-top: 
            20px;color: #000;"><h6><b>Theft Reported</b></h6></a>
          </li>   
    
      <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link" href="Register.php" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #000;"><h6><b>Items Reported</b></h6></a>
          </li>  
    </li>
      <li class="nav-item">
            <a class="nav-link" href="Login.php" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #000;"><h6><b>Resolved Theft Cases</b></h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #000;"><h6><b>Sign Out</b></h6></a>
          </li>
          <li class="nav-item" style="margin-bottom:50px">
        <a class="nav-link" href="notification.php" style="text-align: center;">
          <i class="material-icons glow">notifications_active</i></a>
        </li>
    </ul> 
    </div>
  </div>
</nav>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<div class="spinner-border text-muted text-center"></div>
<div class="spinner-border text-primary"></div>
<div class="spinner-border text-success"></div>
<div class="spinner-border text-info"></div>
<div class="spinner-border text-warning"></div>
<div class="spinner-border text-danger"></div>
<div class="spinner-border text-secondary"></div>
<div class="spinner-border text-dark"></div>
<div class="spinner-border text-light"></div>
        </div>
        <div class="col-md-4"></div>
    </div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-9">
    <form method="post" class="rounded bg-dark" action="user_submit_complaint_handler.php"
     style="background-color: rgba(87, 157, 179, 0.185);border:2px solid #57ffee;color:#000">
            <h1 class="text-info text-center text-primary glow">Update The Lost Item</h1>
            <br>
            <div class="row">
            <div class="col-md-6">
                <label for="" style="color: #456;">Name :</label>
                <input value="<?php echo $receiveName;?>"name="name" class="form-control"
                 placeholder="Enter Your name" type="text"  required="">
            </div>
            <div class="col-md-6">
                <label for="" style="color: #456;">Registration Number: </label>
                <input value="<?php echo $receiveRegNo;?>"name="Reg No" class="form-control" 
                placeholder="Enter Registration number" type="text" required="">
                <br>
            </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                    <label for="" style="color: #456;">Phone Number:</label>
                    <input value="<?php echo $receivePhone;?>"name="phone" class="form-control"
                     placeholder="Enter phone number" type="number" required="">
                </div>
                <div class="col-md-6">
                    <label for="" style="color: #456;">Email:</label>
                    <input value="<?php echo $receiveEmail;?>"name="Email" class="form-control" 
                    placeholder="Enter email" type="email"  required="">
                </div>
                </div>
            <div class="row">
            <div class="col-md-6">
                <label for=""style="color: #456;">Gender:</label> 
                <select value="<?php echo $receiveGender;?>"name="gender"  class="form-control" id="gender"  required="">
                    <option value="" style="color: #456;">Select Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6">
                    <label for="inputPassword3" class="control-label"style="color: #456;">Date you lost the Item</label>
                    <div class="form-control">
                        <input value="<?php echo $receiveDate;?>"name="Date" type="date" class="form-control" 
                        id="inputEmail3" placeholder="Enter..."  required="">
                    </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for=""style="color: #456;">Current Year of study</label>
                    <input value="<?php echo $receiveYearofstudy;?>" name="year of study" class="form-control" 
                    placeholder="Year,Sem Ex.YR1,Sem2" type="text"  required="">
                </div>
                <div class="col-md-6">
                    <label for=""style="color: #456;">What are you missing?</label>
                    <textarea value="<?php echo $receivemissing;?>"name="Missing"class="form-control" id="message" 
                    placeholder="Descibe What your are Missing in Details" cols="45" rows="8"  required=""></textarea>
               </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input class="btn-block btn-success form-control form-group" 
                     name="btn_Update" value="Update" type="submit">
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
        </form>
    </div>
    <div class="col-md-1"></div>
</div>
<hr>
<div class="footer text-center bg-secondary">
    <div class="container">
        <b class="copyright">&copy; 2023 Brought To You By Puea Computer Science Student</b> All rights reserved.
    </div>
</div>


</body>
</html>