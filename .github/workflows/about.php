<?php
//check if the update link has been clicked
if(isset($_GET["id"])){
    //start receiving the data from the link
    $receiveName = $_GET["name"];
    $receiveRegNo = $_GET["reg"];
    $receivePhone= $_GET["phone"];
    $receiveEmail = $_GET["email"];
    $receiveGender = $_GET["gender"];
    $receiveDate = $_GET["date"];
    $receiveCategory= $_GET["cate"];
    $receiveMissing= $_GET["missing"];

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

</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand glow" href="index.php" style="margin-bottom: 5px;color: #000;">

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
            <a class="nav-link" href="Theft Reported.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Theft Reported</b></h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="MakeReport.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Resolved Theft Cases</b></h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="index.php" style="margin-left:50px;text-align: 
            center;color: #000;"><h6><b>Sign Out</b></h6></a>
          </li>
    </ul> 
    </div>
  </div>
</nav>
<br>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-9">
    <form method="post" class="rounded bg-dark" action="Theft.php"
     style="background-color: rgba(87, 157, 179, 0.185);border:2px solid #57ffee;color:#000">
            <h1 class="text-info text-center text-primary glow h1">Update The Lost Item</h1>
            <br>
            <div class="row">
            <div class="col-md-6">
                <label for="" style="color: #456;">Name :</label>
                <input  value="<?php echo $receiveName;?>" name="name" class="form-control" placeholder="Enter Your name" type="text"  required="">
            </div>
            <div class="col-md-6">
                <label for="" style="color: #456;">Registration Number: </label>
                <input  value="<?php echo $receiveRegNo;?>" name="reg" class="form-control" placeholder="Enter Registration number" type="text"  required="">
                <br>
            </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                    <label for="" style="color: #456;">Phone Number:</label>
                    <input  value="<?php echo $receivePhone;?>" name="phone" class="form-control" placeholder="Enter phone number" type="number"  required="">
                </div>
                <div class="col-md-6">
                    <label for="" style="color: #456;">Email:</label>
                    <input  value="<?php echo $receiveEmail;?>" name="email" class="form-control" placeholder="Enter email" type="email" required="">
                </div>
                </div>
            <div class="row">
            <div class="col-md-6">
                <label for=""style="color: #456;">Gender:</label>
                <select  value="<?php echo $receiveGender;?>" name="gender"  class="form-control" id="gender"  required="">
                    <option value="" style="color: #456;">Select Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6">
                    <label for="inputPassword3" class="control-label"style="color: #456;">Date you lost the Item</label>
                    <div class="form-control">
                        <input  value="<?php echo $receiveDate;?>" name="date" type="date" class="form-control" id="inputEmail3" placeholder="Enter..."  required="">
                    </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" style="color: #456;">Select Your Category:</label>
                      <select  value="<?php echo $receiveCategory;?>" class="form-control" name="cate" id="">
                      <option value="Student">Student</option>
                      <option value="Teacher">Teacher</option>
                      <option value="Non Staff">Non Staff</option>
                      <option value="Visitor">Visitor</option>
                     </select>
                </div>
                <div class="col-md-6">
                    <label for=""style="color: #456;">What are you missing?</label>
                    <textarea  value="<?php echo $receiveMissing;?>" name="missing"class="form-control" id="message" 
                    placeholder="Descibe What your are Missing in Details" cols="45" rows="8"  required=""></textarea>
               </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-theme btn-block form-control btn-danger"  type="submit"
                        name="btn_Add" id="submit"><i class="fa fa-user"></i>Update</button>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
        </form>
    </div>
    <div class="col-md-1"></div>
</div>
<br><br>
<div class="footer text-center bg-secondary">
    <div class="container">
        <b class="copyright">&copy; 2023 Brought To You By Puea Computer Science Student</b> All rights reserved.
    </div>
</div>
</body>
</html>