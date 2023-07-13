<?php
  session_start();
  if(isset($_SESSION['password'])){
      $_SESSION['password'];
      define('ALLOW_INCLUDE', true);
      include('tdashcheck.php');

  }
  else{
    echo "<script>
        alert('You are not logged in');
        window.location.href='index.php';
        </script>";
        
  }
?>

