<?php
  session_start();
  if(isset($_SESSION['Username'])){
    require_once 'includes/header-logged-inc.php';
  }else{
    require_once 'includes/header.php';
  }


  require_once 'includes/database.php';
  ?>

  
