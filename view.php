<?php
  require 'includes/database.php';
  require 'includes/header-logged-inc.php';
?>
<?php


    $id = $_GET['userid'];
    $sql = "SELECT * FROM `users` WHERE `id` = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"s",$id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);


?>

  <div class="container">
    <div class="card">
        <div class="card-header">
          <h3>Informations about user</h3>
        </div>
          <table class="table">
            <tr>
              <th>ID</th>
              <td><?php echo $row['id'];?> </td>
            </tr>
            <tr>
              <th>USERNAME:</th>
              <td><?php echo $row['username'];?></td>
            </tr>
            <tr>
              <th>STATUS:</th>
              <td><?php echo $row['status'];?></td>
            </tr>
          </table>
      </div>
      <a href="users-logged.php" class="btn btn-success">BACK</a>
    </div>

<?php
  require 'includes/footer.php';
 ?>
