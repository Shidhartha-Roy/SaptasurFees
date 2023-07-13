<?php
  session_start();
  if(isset($_SESSION['sid'])){
      $_SESSION['sid'];
      define('ALLOW_INCLUDE', true);
      include('sdashcheck.php');

  }
  else{
    echo "<script>
        alert('You are not logged in');
        window.location.href='index.php';
        </script>";
        
  }
?>