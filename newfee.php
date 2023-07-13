<html>
<head>
 <meta charset="UTF-8">
 <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
 <title>New Fee</title>
<link rel="stylesheet" href="index.css">
</head>

 <body>
  <div class="wrapper">
   <header font="Algerian"><B>Add Fee Details</B></header>
   <form action="nfeequery.php" method="post">
    <div class="field Username">
        <div class="input-area">
        <input type="text" placeholder="Enter Student Id" name="sid" onkeyup="this.value = this.value.toUpperCase()">
         </div>

        <div class="input-area">
        <input type="text" placeholder="Enter Student Name" name="name" >
         </div>

        <div class="input-area">
        <select name="numMonths"  style="width: 318px; height: 50px; font-size: 18px;">
            <option value="None" selected>Paid For</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="other">other</option>
        </select>
         </div>
         
        <div class="input-area">
        <select name="paidMonth"  style="width: 318px; height: 50px; font-size: 18px;">
            <option value="None" selected>Paid Upto</option>
            <option value="Jan">Jan</option>
            <option value="Feb">Feb<Feboption>
            <option value="Mar">Mar</option>
            <option value="Apr">Apr</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="Jul">Jul</option>
            <option value="Aug">Aug</option>
            <option value="Sep">Sep</option>
            <option value="Oct">Oct</option>
            <option value="Nov">Nov</option>
            <option value="Dec">Dec</option>
        </select>
         </div>
         <div class="input-area">
        <input type="date" name="date" id="date">
         </div>
        
         <div class="input-area">
        <input type="submit" value="Add Fee Details" style="background-color: #bcf5e2; font-weight: bold; WIDTH: 50%; border-radius: 50px; opacity: 1;" onclick="check()">
         </div>

         
         
         
         
		
		</form >
		<div class="sign-txt">Go<a href="tdash.php"> Back</a></div>
		</div>
		

 </body>
 </html>