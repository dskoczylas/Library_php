<?php
  session_start();
  if(isset($_SESSION['Username'])){
    require_once 'includes/header-logged-inc.php';
  }else{
    require_once 'includes/header.php';
  }


  require_once 'includes/database.php';
 ?>
<?php

  if(isset($_SESSION['Username'])){
    echo "WELCOME ". $_SESSION['Username'];
  }else{
    echo "WELCOME LIBRARY SYSTEM - PLEASE LOGIN IN OR CREATE AN ACCOUNT!";
  }


?>


 <?php
 include_once 'includes/footer.php';
?>
