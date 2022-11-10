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
 ?>

<div class="container">
<a href="create.php" class="btn btn-success">CREATE NEW USER</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>STATUS</th>
        <th>ACTION</th>
      </tr>
    </thead>

    <?php while($row = mysqli_fetch_array($result)){?>

    <tbody>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
          <a class="btn btn-success btn-sm" href="view.php?userid=<?php echo $row['id'];?>">VIEW</a>
          <a class="btn btn-secondary btn-sm" href="edit.php">EDIT</a>
          <a class="btn btn-danger btn-sm" href="delete.php">DELETE</a>
        </td>
      </tr>
    </tbody>
  <?php } ?>
  </table>
</div>
  <?php
      require_once 'includes/footer.php';
   ?>
