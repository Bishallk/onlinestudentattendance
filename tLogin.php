<?php
require_once("connection.php"); //db connection
$error = []; //error array
if (isset($_POST['tLogin-btn'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $query = "SELECT * FROM teachers WHERE Username = '$username'";

    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    $encrypt_pswd = password_hash($password, PASSWORD_BCRYPT);
    if ($count == 1) {
        if (password_verify($password,$encrypt_pswd)) {
            session_start();
            $_SESSION['loginSuccess'] = "Login Successful";
            $msg['loginSuccess'] = "Login Successful";
            $_SESSION['tuname'] = $row['Username'];
            $_SESSION['tpswd'] = $row['Password'];
            header('Location: tDashboard.php');
        } else {
            $error['wrongPassword'] = "Invalid Password";
        }
    } else {
        $error['wrongUsername'] = " Invalid Username";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery.min.js"></script>
</head>

<body>
    <section>
        <div id="login-box" class="myBox">
            <h1>Teacher Login</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="col-12 bg-danger error">
                    <?php if ($error != null) {
                        print_r($error);
                    } ?>
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary col-12 mt-3" name="tLogin-btn" value="Login">
                </div>
            </form>
            <div class="">
                <span class="fw-bold opacity-75">Don't have an account?</span>
                <!-- <a href="tRegister.php"> -->
                <button name="register" class="btn btn-link" id="register-btn">Register</button>
                <!-- </a> -->
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            // alert(1);
            $("#register-btn").click(function() {
                $("#login-box").load("./tRegisterform.php");
            });
        });
    </script>

</body>

</html>