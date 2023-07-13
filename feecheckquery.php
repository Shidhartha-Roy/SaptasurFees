<?php
include "conn.php";

if(isset($_POST['sid']) && isset($_POST['name'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST['sid']);
$name = validate($_POST['name']);


if(empty($uname) && empty($pass)){
    echo "<script>
                     alert('Enter either Id or Name ');
                     window.location.href='newfee.php';
                  </script>";
}

else{
$sql = "SELECT * FROM student WHERE sid='$uname' or Name='$name'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    if($row['sid']===$uname || $row['Name'] === $name) {

        $query = "SELECT paid_for,paid_uptil,latest_date_paid FROM fees WHERE sid='$uname'";
        $res =  mysqli_query($conn, $query);
        
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $data1 = $row["paid_for"];
            $data2 = $row["paid_uptil"];
            $data3 = $row["latest_date_paid"];
            $datetime = DateTime::createFromFormat('Y-m-d', $data3);
            $newDate = $datetime->format('d-m-Y');
            header("Location: feecheck.php?pf=$data1 && pu=$data2 && date=$newDate");
            

          } else {
            echo "<script>
                     alert('No data Found');
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
}



?>
