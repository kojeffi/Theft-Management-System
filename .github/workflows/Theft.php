<?php
  //check if the button has been clicked
  if (isset($_POST["btn-Add"])){
      //start receiving the data from the user
      $userName=$_POST["name"];
      $userRegistrationNumber=$_POST["reg"];
      $userPhoneNumber=$_POST["phone"];
      $userEmail=$_POST["email"];
      $userGender=$_POST["gender"];
      $userDate=$_POST["date"];
      $userCategory=$_POST["cate"];
      $userMissing=$_POST["missing"];
      $userFound=$_POST["found"];
      //proceed to connect to the DB for you to save the data
      require_once "connect.php";
      //prepare the insert query to save
      $insertQuery="INSERT INTO `users`(`id`, `name`, `reg`, `phone`, `email`, `gender`, 
      `date`, `cate`, `missing`, `found`) VALUES (null,'$userName','$userRegistrationNumber','$userPhoneNumber',
      '$userEmail','$userGender','$userDate','$userCategory',
      '$userMissing','$userFound')";
                     
      //Use mysqli_query()to save
      $saves = mysqli_query($con,$insertQuery);
      //check if the saving was successful
      if(isset($saves)){
        echo"<script>alert('Successfully submitted the Lost items!!!!!!!!!!!!!! Wait for a call from Admin')</script>";
        // header('location: index.php');
      }else{
          echo"<script>alert('submission failed')</script>";
      }
  }
?>