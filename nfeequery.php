<?php
include "conn.php";

if(isset($_POST['sid']) && isset($_POST['name']) && isset($_POST['numMonths']) && isset($_POST['paidMonth'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST['sid']);
$name = validate($_POST['name']);
$pfor = validate($_POST['numMonths']);
$pupto = validate($_POST['paidMonth']);
$dte = $_POST['date'];

if(empty($uname) && empty($name)){
    echo "<script>
                     alert('Enter either Id or Name ');
                     window.location.href='newfee.php';
                  </script>";
}


$sql = "SELECT * FROM student WHERE sid='$uname' or Name='$name'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    $stdid = $row['sid'];
    if($row['sid']===$uname || $row['Name'] === $name) {

        $data = "UPDATE fees SET paid_for='$pfor',
        paid_uptil='$pupto',latest_date_paid='$dte' WHERE sid='$stdid'";


        $res =  mysqli_query($conn, $data);
        
        if ($res) {
            
            echo "<script>
            alert('Data Entered');
            window.location.href='tdash.php';
         </script>";
            

          } else {
            echo "<script>
                     alert('No data Found');
                     window.location.href='newfee.php';
                  </script>";
          }
        
    }
}
else{
    echo "<script>
                 alert('No data Found');
                 window.location.href='newfee.php';
              </script>";
}




?>
