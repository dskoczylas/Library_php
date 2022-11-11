<?php

  require_once 'database.php';

  $username = $_POST['user'];
  $pass = $_POST['psw'];
  $rpass = $_POST['repeat_psw'];


  if(empty($username) || empty($pass) || empty($rpass)){
      header("Location: ../create.php?error=empty");
      exit();
  }else if($pass != $rpass){
      header("Location: ../create.php?error=differentPass");
      exit();
  }else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
      header("Location: ../create.php?error=invalidName");
      exit();
  }else{
        $sql = "SELECT * FROM `users` WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rows = mysqli_stmt_num_rows($stmt);
          if($rows > 0){
            header("Location: ../create.php?error=userExist");
            exit();
              }else{
                $pHash = password_hash($pass,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users`(`username`,`password`) VALUES (?,?);";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_bind_param($stmt,"ss",$username,$pHash);
                mysqli_stmt_execute($stmt);
                header ("Location: ../create.php?success=userCreated");
                exit();
              }

    }



 ?>
