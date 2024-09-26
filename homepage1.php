<?php
session_start();
// include("connect.php");
// include("htmlfile.php");
// include("index.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="htmlfile.css">
</head>
<body>

 <!-- <div class="container">
        <form>
      
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div> -->



      
                            <!-- Hello page -->

    <!-- <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello Welcome to my website. -->

                                <!-- Hello page -->



       
       

                <!-- Php user details show code-->
       <?php 
    //    if(isset($_SESSION['email'])){
    //     $email=$_SESSION['email'];
    //     $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
    //     while($row=mysqli_fetch_array($query)){
    //         echo $row['firstName'].' '.$row['lastName'];
    //     }
    //    }
       ?>


      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>