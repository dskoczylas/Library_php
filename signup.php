<?php
  include_once 'includes/header.php';

 ?>

<?php
    if(isset($_GET['error'])){
      if($_GET['error'] == "empty"){
        echo " Enter empty fields!";
      }elseif(($_GET['error'] == "invalidname")){
        echo "You used invalid characters!";
      }elseif(($_GET['error'] == "wrongsecondpassword")){
        echo "Your passwords are different!";
      }elseif(($_GET['error'] == "exist")){
        echo "User already exist in system!";
      }
    }elseif(isset($_GET['succes'])){
      echo "Registered! Please login!";
    }

 ?>


<form class="col-lg-6 offset-lg-3" action="includes/signup-inc.php" method="post">
<div class="container">
  <div class="card">
  <div class="card-header">
    <h3>SIGN UP</h3>
  </div>
  <div class="form-group">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="password"><br>
    Password: <input type="password" name="confirmpassword"><br>
              <button type="submit" name="submit">SIGN IN</button>
  </div>
</div>
</div>
</form>


 <?php
 include_once 'includes/footer.php';
?>
