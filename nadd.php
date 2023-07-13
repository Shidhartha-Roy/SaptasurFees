<?php
include "conn.php";

$cat = $_POST['category'];
$num = $_POST['num'];
$sid = $cat.$num;
$name = $_POST['name'];
$phone = $_POST['phone'];
$add = $_POST['address'];
$pass = $_POST['password'];



$stmt = $conn->prepare("INSERT INTO student VALUES(?,?,?,?,?)");
$stmt->bind_param("sssss", $sid, $name,$phone,$add,$pass);
$stmt->execute();

$stmt->close();
$conn->close();


echo "<script>
          alert('Details Successfully Entered');
          window.location.href='tdash.php';
      </script>";


?>