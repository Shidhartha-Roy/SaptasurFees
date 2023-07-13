<html>
<head>
 <meta charset="UTF-8">
 <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
 <title>Login Form</title>
<link rel="stylesheet" href="index.css">
</head>

 <body>
  <div class="wrapper">
   <header font="Algerian"><B>Student Login</B></header>
   <form action="slogin.php" method="post">
    <div class="field Username">
        <div class="input-area">
        <input type="text" placeholder="Enter Your Username" name="sid" onkeyup="this.value = this.value.toUpperCase()" required>
         </div>
        <div class="input-area">
        <input type="password" placeholder="Enter Your Password" name="password" required>
         </div>
         <div class="input-area">
        <input type="submit" value="Login" style="background-color: #bcf5e2; font-weight: bold; WIDTH: 50%; border-radius: 50px; opacity: 1;">
         </div>
         
		
		</form >
		<div class="sign-txt">Go<a href="index.php"> Back</a></div>
		</div>
		

 </body>
 </html>