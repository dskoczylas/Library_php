<?php

          require_once 'database.php';

          $username = $_POST['user'];
          $password = $_POST['password'];
          $confirmpassword = $_POST['confirmpassword'];

        if (empty($username) || empty($password) || empty($confirmpassword)){
            header("Location: ../signup.php?error=empty");
            exit();
        }
        elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location: ../signup.php?error=invalidname");
            exit();
        }
        elseif($password != $confirmpassword){
            header("Location: ../signup.php?error=wrongsecondpassword");
            exit();
        }else{
              $sql = "SELECT * FROM users WHERE username = ?;";
              $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                  header("Location: ../signup.php?error=sqlerror");
                  exit();
                }else{
                      mysqli_stmt_bind_param($stmt,"s",$username);
                      mysqli_stmt_execute($stmt);
                      mysqli_stmt_store_result($stmt);
                      $rowCount = mysqli_stmt_num_rows($stmt);
                        if($rowCount > 0){
                          header("Location: ../signup.php?error=exist");
                          exit();
                        }else{
                            $sql = "INSERT INTO users (username,password) VALUES (?,?);";
                            $stmt = mysqli_stmt_init($conn);
                            mysqli_stmt_prepare($stmt,$sql);
                            $passHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"ss",$username,$passHash);
                            mysqli_execute($stmt);
                            header("Location: ../signup.php?succes=registered");
                            exit();
                      }
                  }
              mysqli_stmt_close($stmt);
              mysqli_close($conn);
              }




 ?>
