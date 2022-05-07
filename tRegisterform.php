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

        <form action="" method="POST">
            <div class="col-12 bg-danger error">
                <?php
                include 'error.php';
                if($error!=null){
                    print_r($error);
                }
                // if (isset($error['emailAlreayExists'])) {
                //     echo $error['emailAlreayExists'];
                // }
                // if (isset($error['registerFailed'])) {
                //     echo $error['registerFailed'];
                // }
                // if (isset($error['userAlreadyExists'])) {
                //     echo $error['userAlreadyExists'];
                // }
                // ?>
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
            <a href="tLoginform.php">
                <button name="login" class="btn btn-link">Login</button>
            </a>
        </div>
    </div>
</body>

</html>