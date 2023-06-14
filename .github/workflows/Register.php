<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Theft Management System | Student Registration</title>
      <!--    Start of connection to bootstrap js-->
      <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
      <script src="assets/bootstrap/js/popper.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
      <!--    End of connection bootstrap js-->

      <!--    start of connection to bootstrap css-->
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
      <style>
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

    .nav-link{
    text-decoration: #57ffee;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  </head>
  <body>
      <br><br>
      <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4 bg-secondary rounded ">
        <div class="container rounded">
            <form class="form-login hover" method="POST" action="Registration1.php">
                                <a href="index.php"><img class="rounded-circle" 
                                src="Images/img6.jpg" alt="Logo" style="height: 80px;width: 80px;margin-left: 40%;"></a>
                <h4 class="form-login-heading h4 text-center glow" style="color: #fff;"><b>Registration Form</b></h4>
              <p style="padding-left: 1%; color: green">
              </p>
              <br>
              <div class="login-wrap">
                <label class="text-white" for="">Enter Name: </label>
               <input type="text" class="form-control" placeholder="Student Full Name" name="name" required="required" autofocus>
                  <br>
                  <label class="text-white" for="">Enter Email: </label>
                  <input type="email" class="form-control" placeholder="Student Email" id="email"
                         onBlur="userAvailability()" name="email" required="required">
                   <span id="user-availability-status1" style="font-size:12px;"></span>
                  <br>
                  <label class="text-white" for="">Registration Number: </label>
                  <input type="name" class="form-control" placeholder="Student Registration Number" id="number"
                         onBlur="userAvailability()" name="number" required="required">
                   <span id="user-availability-status1" style="font-size:12px;"></span>
                  <br>
                  <label class="text-white" for="">Enter Password: </label>
                  <input type="password" class="form-control" placeholder="Student Password"
                   required="required" name="password" 
                      title="Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.">
                       <br>
                       <!-- pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])
                   [A-Za-z\d@$!%*?&]{8,}$" -->
                <!-- Add an additional element to display password requirements -->
                   <p class="text-white" >Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.</p>

                  <button class="btn btn-theme btn-block form-control btn-warning rounded"  type="submit"
                          name="btn_Add" id="submit"><i class="fa fa-user"></i> Register</button>
                  <br>
                  <div class="text-primary text-sm-right " style="margin-right: 30px">
                      Already Registered?<a href="Login.php"> Sign in
                      </a>
                  </div>
                </div>
            </form>	  	
        </div>
    </div>
  <script>
      $.backstretch("assets/img/login-bg.jpg", {speed: 500});
  </script>
       </div>
       <div class="col-md-4"></div>
      </div>  
  </div>
	  	
  </body>
</html>
