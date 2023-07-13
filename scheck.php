<html>
<head>
 <meta charset="UTF-8">
 <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
 <title>Student Information</title>
<link rel="stylesheet" href="index.css">
</head>

 <body>
  <div class="wrapper">
   <header font="Algerian"><B>Student Check</B></header>
   <form action="sc.php" method="post">
    <div class="field Username">
        <div class="input-area">
        <input type="text" placeholder="Enter Student Id" name="sid" onkeyup="this.value = this.value.toUpperCase()">
         </div>
        <div class="input-area">
        <input type="text" placeholder="Enter Student Name" name="name">
         </div>
        
         <div class="input-area">
        <input type="submit" value="Find Details" style="background-color: #bcf5e2; font-weight: bold; WIDTH: 50%; border-radius: 50px; opacity: 1;">
         </div>

         <div class="input-area">
        <input type="text" placeholder="Student Phone" name="phone" value="<?php echo isset($_GET['phone']) ? $_GET['phone'] : ''; ?>" readonly>
         </div>
         <div class="input-area">
        <input type="text" placeholder="Student Address" name="address" value="<?php echo isset($_GET['add']) ? $_GET['add'] : ''; ?>" readonly>
         </div>
         
         
         
		
		</form >
		<div class="sign-txt">Go<a href="tdash.php"> Back</a></div>
		</div>
		

 </body>
 </html>