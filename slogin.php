<?php
session_start();
include "conn.php";

if(isset($_POST['sid']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST['sid']);
$pass = validate($_POST['password']);

if(empty($uname)){
    echo "<script>alert('Username cannot be empty');
                  window.location.href='stdlogin.php'</script>";
}
else if(empty($pass)){
    echo "<script>alert('Password cannot be empty');
    window.location.href='stdlogin.php'</script>";
}

$sql = "SELECT * FROM student WHERE sid='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result)==1){
    $row1 = mysqli_fetch_assoc($result);
$_SESSION['sid'] = $row1['sid'];
    $query = "SELECT paid_for,paid_uptil,latest_date_paid FROM fees WHERE sid='$uname'";
        $res =  mysqli_query($conn, $query);
        
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            
            $data1 = $row["paid_for"];
            $data2 = $row["paid_uptil"];
            $data3 = $row["latest_date_paid"];
            $datetime = DateTime::createFromFormat('Y-m-d', $data3);
            $newDate = $datetime->format('d-m-Y');
            header("Location: sdash.php?pf=$data1 && pu=$data2 && date=$newDate");
            

          } else {
            echo "<script>
                     alert('No data Found');
                  </script>";
          }
}
else{
    echo "<script>
              alert('Entered Credentials are wrong');
              window.location.href='stdlogin.php';
          </script>";
          exit();
}



?>
