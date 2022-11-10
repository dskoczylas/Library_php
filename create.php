<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<form method="post" action="includes/create-inc.php">
<div class="container">
  <div class="card-header">
  <h3>CREATE NEW USER</h3>
</div>
  <div class="form-group">
    <label>Username:</label>
    <input type="text" name="user">
  </div>
    <div class="form-group">
    <label>Password:</label>
    <input type="password" name="psw">
  </div>
    <div class="form-group">
    <label>Repeat password:</label>
    <input type="password" name="repeat_psw">
  </div>
    <button type="submit" class="btn btn-success">CREATE USER</button>
</div>
</form>
