<?php

    require_once 'database.php';

    $username = $_POST['user'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        header("Location: ../login.php?error=enternameorpassword");
        exit();
    }else{
          $sql = "SELECT * FROM users WHERE username = ?;";
          $stmt = mysqli_stmt_init($conn);
          mysqli_stmt_prepare($stmt,$sql);
          mysqli_stmt_bind_param($stmt,"s",$username);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $passCheck = password_verify($password,$row['password']);

                if ($passCheck === true){
                  session_start();
                  $_SESSION['Username'] = $row['username'];

                  header("Location: ../index.php");
                  exit();
                }else{
                  header("Location: ../login.php?error=wrongpassword");
                  exit();
                }


            }else{
              header("Location: ../login.php?error=nouserexist");
              exit();
            }



    }








 ?>
