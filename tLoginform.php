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
                <form action="tLogin.php" method="POST">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary col-12" name="tLogin-btn" value="Login">
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
            $(document).ready(function () {
                // alert(1);
                $("#register-btn").click(function () {
                    $("#login-box").load("./tRegisterform.php");
                });
            });
        </script>

    </body>

</html>