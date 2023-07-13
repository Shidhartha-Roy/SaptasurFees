<?php
    // Check if the ALLOW_INCLUDE constant is defined and set to true
    if (!defined('ALLOW_INCLUDE') || !ALLOW_INCLUDE) {
        // The constant is not defined or is set to false, so redirect to the login page
        echo "<script>
        alert('You are not logged in');
        window.location.href='teachlogin.php';
        </script>";
        exit();
    }
?>
<html>
<head>
 <meta charset="UTF-8">
 <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
 <title>Teacher Dashboard</title>
<link rel="stylesheet" href="index.css">
 <script>
    function comingsoon(){
        alert("The website is Coming soon....")
    }

 </script>
</head>

 <body>
  <div class="wrapper">
   <header font="Algerian"><B>Welcome Swapna</B></header>
   <form >
    <div class="field Username">
        <div class="input-area">
        
        <input type="button" value="Register a New Student" id="teach" onclick="window.location.href='newadd.php';" style="background-image: url(images/admission.png); ">
         </div>
         <div class="input-area">
        <input type="button" value="Check Student Details" id="stud" onclick="window.location.href='scheck.php';">
         </div>
        <div class="input-area">
        <input type="button" value="New Fee Payment" id="teach" onclick="window.location.href='newfee.php';" style="background-image: url(images/fees1.jpg);">
         </div>
         <div class="input-area">
        <input type="button" value="Check Fee Details" id="stud" onclick="window.location.href='feecheck.php';" style="background-image: url(images/checkfees.png);">
         </div>
         
		
		</form >
		<div class="sign-txt"><a href="logout.php">Back</a> to login</div>
		</div>
		

 </body>
 </html>
