<?php

?>

<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Library</title>
</head>
<body>
  <ul>

    <?php
    #if($_SESSION['Status'] == 'admin'){
      echo '<li><a href="users-logged.php">USERS</a></li>';
      echo '<li><a href="books.php">BOOKS</a></li>';
      echo '<li><a href="logout.php">LOGOUT</a></li>';
    #}elseif($_SESSION['Status'] == 'user'){
    #  echo '<li><a href="logout.php">LOGOUT</a></li>';
    #}
      ?>



  </ul>
  <hr>
