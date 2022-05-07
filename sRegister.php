<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="register-box" class="myBox">
        <h2>Student Registration</h2>
        <form action="" method="POST">
            <div>
                <label for="sname">Name</label>
                <input type="text" class="form-control" id="sname" placeholder="Student's name">
            </div>
            <div>
                <label for="sid">Id No.</label>
                <input type="text" class="form-control" id="sid" placeholder="Student's Id card no.">
            </div>
            <div>
                <label for="slevel">Level</label>
                <select id="level" class="form-control">
                    <option value="">Select level</option>
                    <option value="Plus2">+2</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Master">Master</option>
                </select>
            </div>
            <div>
                <label for="sfaculty">Faculty</label>
                <select id="faculty" class="form-control dropdown-menu-start">
                    <option value="" class="">Select Faculty</option>
                    <option value="Science">Science</option>
                    <option value="Management">Management</option>
                    <option value="Humanities">Humanities</option>
                </select>
            </div>
            <div>
                <label for="course">Course</label>
                <input type="text" class="form-control" placeholder="Enter course">
            </div>
            <div>
                <label for="Year/sem">Year/Semester</label>
                <input type="text" class="form-control" placeholder="Enter Year/Semester">
            </div>

            <div>
                <label for="temail">Email</label>
                <input type="email" class="form-control" id="semail" placeholder="Enter email">
            </div>
            <div>
                <label for="tphone">Phone</label>
                <input type="text" class="form-control" id="sphone" placeholder="Enter Phone no.">
            </div>
            <div>
                <input type="submit" class="btn btn-primary col-12 mt-3" name="register-btn" value="Register" class="btn">
            </div>
        </form>
    </div>
</body>

</html>