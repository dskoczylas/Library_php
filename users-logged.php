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

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_all($result);



 ?>




<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>STATUS</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($row as $value):?>
      <tr>
        <td><?php echo $value[0]?></td>
        <td><?php echo $value[1]?></td>
        <td><?php echo $value[3]?></td>
      </tr>
        <?php endforeach;?>
    </tbody>
  </table>
</div>




  <?php
      require_once 'includes/footer.php';
   ?>
