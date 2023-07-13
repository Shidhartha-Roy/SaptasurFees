<html>
<head>
 <meta charset="UTF-8">
 <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
 <title>Check Fees</title>
<link rel="stylesheet" href="index.css">
</head>

 <body>
  <div class="wrapper">
   <header font="Algerian"><B>Check Payment Staus</B></header>
   <form action="feecheckquery.php" method="post">
    <div class="field Username">
        <div class="input-area">
        <input type="text" placeholder="Enter Student Id" name="sid" onkeyup="this.value = this.value.toUpperCase()">
         </div>

        <div class="input-area">
        <input type="text" placeholder="Enter Student Name" name="name" onkeyup="this.value = this.value.toUpperCase()">
         </div>
        
         <div class="input-area">
        <input type="submit" value="Get Details" style="background-color: #bcf5e2; font-weight: bold; WIDTH: 50%; border-radius: 50px; opacity: 1;" onclick="check()">
         </div>

         <div class="input-area">
        <input type="text" placeholder="Months Paid For" name="pf" value="<?php echo isset($_GET['pf']) ? $_GET['pf'] : ''; ?>" readonly>
         </div>
         <div class="input-area">
        <input type="text" placeholder="Cleared Month" name="pm" value="<?php echo isset($_GET['pu']) ? $_GET['pu'] : ''; ?>" readonly>
         </div>
         <div class="input-area">
        <input type="text" placeholder="Date of Latest Payment" name="dt" value="<?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?>" readonly>
         </div>
         
         
         
		
		</form >
		<div class="sign-txt">Go<a href="tdash.php"> Back</a></div>
		</div>
		

 </body>
 </html>