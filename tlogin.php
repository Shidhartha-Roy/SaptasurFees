<?php
session_start();
include "conn.php";

if(isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$pass = validate($_POST['password']);


if(empty($pass)){
    header("Location: loginerror.php");
    exit();
}

$sql = "SELECT * FROM teachlogin WHERE username='Swapna1' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    if($row['password'] === $pass) {
        
        $_SESSION['password'] = $row['password'];
        echo "<script>alert('We have saved your session')</script>";
        header("Location: tdash.php");
    }
    
}
else{
    echo "<script>
        alert('Wrong credentials Entered');
        window.location.href='teachlogin.php';
        </script>";
        exit();
}



?>