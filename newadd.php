<html>
<head>
 <meta charset="UTF-8">
 <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
 <title>New Admission Form</title>
<link rel="stylesheet" href="index.css">
</head>

 <body>
  <div class="wrapper" id="newadd">
   <header font="Algerian"><B>New Student</B></header>
   <form action="nadd.php" method="post">
    <div class="field Username">
        <div class="input-area">
        <select name="category" style="width: 90px; height: 48px; border-radius: 5px; font-size: 18px;" >
            <option value="A">Art</option>
            <option value="M">Music</option>
            <option value="I">Instrument</option>
            <option value="O">Others</option>
            
        </select>
        <input type="text" placeholder="Enter New Student Id" name="num" style="WIDTH: 220px;" required>
         </div>
        <div class="input-area">
        <input type="text" placeholder="Enter New Student Name" name="name" required>
         </div>
        <div class="input-area">
        <input type="number" placeholder="Enter New Student Phone" name="phone"required>
         </div>
        <div class="input-area">
        <input type="text" placeholder="Enter New Student Address" name="address" required>
         </div>
        <div class="input-area">
        <input type="password" placeholder="Enter Student Password" name="password" size= "10" maxlenght= "10" required>
         </div>
         <div class="input-area">
        <input type="submit" value="Add Student" style="background-color: #bcf5e2; font-weight: bold; WIDTH: 50%; border-radius: 50px; opacity: 1;">
         </div>
         
		
		</form >
		<div class="sign-txt">Go<a href="tdash.php"> Back</a></div>
		</div>
		

 </body>
 </html>