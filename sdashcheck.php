<?php
    // Check if the ALLOW_INCLUDE constant is defined and set to true
    if (!defined('ALLOW_INCLUDE') || !ALLOW_INCLUDE) {
        // The constant is not defined or is set to false, so redirect to the login page
        echo "<script>
        alert('You are not logged in');
        window.location.href='stdlogin.php';
        </script>";
        exit();
    }
?>



<html>
<head>
 <meta charset="UTF-8">
 <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
 <title>Personal Fee Information</title>
<link rel="stylesheet" href="index.css">
</head>

 <body>
  <div class="wrapper">
   <header font="Algerian"><B>Fee Information</B></header>
   <form action="slogin.php" method="post">
    <div class="field Username">
        
          <label>Months Paid For</label>
         <input type="text" placeholder="Months Paid For" name="pf" value="<?php echo isset($_GET['pf']) ? $_GET['pf'] : ''; ?>" style="height: 50px;" readonly>
         </div>
         <label>Cleared Upto:</label>
         <div class="input-area">
        <input type="text" placeholder="Cleared Month" name="pm" value="<?php echo isset($_GET['pu']) ? $_GET['pu'] : ''; ?>" style="height: 50px;" readonly>
         </div>
         <div class="input-area">
        <label>Paid Last on:</label>
        <input type="text" placeholder="Date of Latest Payment" name="dt" id="ldate" value="<?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?>" style="height: 50px;" readonly>
         </div>
         
         
         
		
		</form >
		<div class="sign-txt">Go<a href="logout.php"> Back</a></div>
		</div>
		

 </body>

 </html>