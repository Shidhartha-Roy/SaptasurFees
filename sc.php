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
                     alert('Enter at least one field ');
                     window.location.href='scheck.php';
                  </script>";
}

else{
$sql = "SELECT * FROM student WHERE sid='$uname' or Name='$name'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    if($row['sid']===$uname || $row['Name'] === $name) {
        $data = "SELECT phone,address FROM student WHERE name='$name' or sid='$uname'";
        $res =  mysqli_query($conn, $data);
        
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $data1 = $row["phone"];
            $data2 = $row["address"];
            header("Location: scheck.php?phone=$data1 && add=$data2");
            

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
                 window.location.href='scheck.php';
              </script>";
}
}



?>
