<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "record keeping system");

if(isset($_POST["sign_up_btn"])) {

    $usernameemail = mysqli_real_escape_string($conn, $_POST["usernameemail"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $qry = "SELECT * 
            FROM attendance_records 
            WHERE username = ? AND password = ?";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $qry)) {
        echo "SQL FAILED!";
    } else {
        
        mysqli_stmt_bind_param($stmt, "ss", $usernameemail, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) == 0) {
            header("Location: login.php?invalid_input=1");
        } else {
            
            if($row['usertype'] == 'student') {
                
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_type'] = $row['usertype'];

                if(isset($_SESSION['user_id']) && isset($_SESSION['user_type'])) {
                    header("Location: ..\client.php");
                }

            } else {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_type'] = $row['user_type'];

                if(isset($_SESSION['user_id']) && isset($_SESSION['user_type'])) {
                    header("Location: ..\admin.php");
                }
            }


        }

    }

    
}

  if(isset($_POST["submit"])) {
    
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email_add = mysqli_real_escape_string($conn, $_POST['email_address']);
    $username =  mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    $exist = "SELECT *
              FROM attendance_records
              WHERE username = ?";
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $exist)) {
      echo "SQL FAILED!";
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $data = mysqli_fetch_assoc($result);

      if(mysqli_num_rows($result) > 0) {

        // echo "USername exist";

        header('location: ..\random.php?username_exist=1');

      } else {
        $create_user_qry = "INSERT INTO `attendance_records`(
                                                        `name`, 
                                                        `username`, 
                                                        `email`, 
                                                        `password`
                                                        ) VALUES (?, ?, ?, ?)";
        
        $stmt1 = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt1, $create_user_qry)) {
          echo "SQL FAILED!!";
        } else {
          mysqli_stmt_bind_param($stmt1, "ssss", $full_name, $username, $email_add, $pwd);
          mysqli_stmt_execute($stmt1);

          header('location: ..\random.php?created_user=1');

        }
      }
      

    }

  }

  ?>

