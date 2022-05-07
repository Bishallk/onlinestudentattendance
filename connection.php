<?php
$connection = new mysqli('localhost', 'root', '', 'studentattendance');
if ($connection->connect_errno != 0) {
    die('Database connection error:' . $connection->connect_error);
} else { ?>
    <!-- <script>
        alert("Database connected");
    </script> -->

<?php } ?>

<!--  -->