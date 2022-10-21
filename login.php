<?php
  include_once 'includes/header.php';
 ?>

<?php
      if(isset($_GET['error'])){
        if($_GET['error'] == 'enternameorpassword'){
          echo "Please enter login and password!";
          }
          elseif($_GET['error'] == 'wrongpassword' || $_GET['error'] == 'nouserexist'){
          echo "Please enter valid login and password!";
          }
        else{
            echo "Please enter valid login and password!";
          }

      }

 ?>



 <form class="col-lg-6 offset-lg-3" action="includes/login-inc.php" method="post">
   <div class="form-group">
    LOGIN: <input type="text" name="user"><br>
    PASSWORD: <input type="password" name="password"><br>
    <button type="submit" name="sub">LOG IN</button>
  </div>
</form>


 <?php
 include_once 'includes/footer.php';
?>
