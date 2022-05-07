     <?php
        $error = [];
        // include 'tRegisterform.php';
        // include 'Error.php';
        include 'connection.php';
        if (isset($_POST['tRegister-btn'])) {
            //db connection
            //to save from sql injection use mysqli_real_escape_string
            $tname = mysqli_real_escape_string($connection, $_POST['tname']);
            $temail = mysqli_real_escape_string($connection, $_POST['temail']);
            $tphone = mysqli_real_escape_string($connection, $_POST['tphone']);
            $tuname = mysqli_real_escape_string($connection, $_POST['tuname']);
            $tpswd = mysqli_real_escape_string($connection, $_POST['tpswd']);
            $encrypt_pswd = password_hash($tpswd, PASSWORD_BCRYPT); //ecnrypt password

            //checking duplicate email
            $email_query = "SELECT * FROM teachers WHERE Email = '$temail'";
            $check_email = mysqli_query($connection, $email_query);
            $email_count = mysqli_num_rows($check_email);
            if ($email_count > 0) {
                $error['emailAlreayExists'] = "Email already exists";
                // echo $error['emailAlreayExists'];
            } else {
                //checking duplicate username
                $uname_query = "SELECT * FROM teachers WHERE Username='$tuname'";
                $check_uname = mysqli_query($connection, $uname_query);
                // echo $check_uname;
                $uname_count = mysqli_num_rows($check_uname);
                if ($uname_count > 0) {
                    $error['uNameAlreadyExists'] = "Username already exists";
                } else {
                    //inserting data into database
                    $insert_query = "INSERT INTO teachers (Name, Email, Phone, Username, Password) VALUES ('$tname', '$temail', '$tphone', '$tuname', '$encrypt_pswd')";
                    $insert = mysqli_query($connection, $insert_query);
                    if ($insert) {
                        $msg['registerSuccess'] = "Registration Successful";
        ?>
                     <script>
                         alert("Registration Successful");
                     </script>
     <?php
                        header('Location: tLogin.php');
                    } else {
                        $error['registerFailed'] = "Registration Failed";
                        $error['connectionerror'] = mysqli_error($connection);
                    }
                }
                $connection->close();
            }
        }
        ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Teacher Registration</title>
         <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/style.css">

     </head>

     <body>
         <div id="register-box" class="myBox">
             <h2> Teacher Registration</h2>

             <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                 <div class="col-12 bg-danger error">
                     <?php if ($error != null) {
                            print_r($error);
                        } ?>
                 </div>
                 <div>
                     <label for="tname">Name</label>
                     <input type="text" class="form-control" name="tname" placeholder="Enter full name" required>
                 </div>
                 <div>
                     <label for="temail">Email</label>
                     <input type="email" class="form-control" name="temail" placeholder="Enter your email" required>
                 </div>
                 <div>
                     <label for="tphone">Phone</label>
                     <input type="tel" class="form-control" name="tphone" placeholder="Enter Phone no." required>
                 </div>
                 <div>
                     <label for="tusername">Username</label>
                     <input type="text" class="form-control" name="tuname" placeholder="Enter username" required>
                 </div>
                 <div>
                     <label for="tpassword">Password</label>
                     <input type="password" class="form-control" name="tpswd" placeholder="Enter password" required>
                 </div>
                 <div>
                     <input type="submit" class="btn btn-primary col-12 mt-3" name="tRegister-btn" value="Register" onclick="validate()">
                 </div>
             </form>
             <div class="mt-2">
                 <span class="fw-bold opacity-75 ">Already have an account?</span>
                 <a href="tLogin.php">
                     <button name="login" class="btn btn-link">Login</button>
                 </a>
             </div>
         </div>
     </body>

     </html>