<?php
include 'head.php';
?>
        <title>Registration Form</title>
    </head>
<body>
    <div class="container">
        <?php echo validation_errors(); 
        echo $error;
        ?>
        <form action="do_upload" method="post" enctype="multipart/form-data">
            <h1>Register</h1>
            <h4>First Name</h4>
            <input type="text" class="form-control" name="fname"><br>
            <h4>Last Name</h4>
            <input type="text" class="form-control" name="lname"><br>
            <h4>Username</h4>
            <input type="text" class="form-control" name="user"><br>
            <h4>Password</h4>
            <input type="password" class="form-control" name="pw"><br>
            <h4>Confirm Password</h4>
            <input type="password" class="form-control" name="cpw"><br>
            <h4>Email</h4>
            <input type="email" class="form-control" name="email"><br>
            <input type="file" name="image"> <br>
            <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>
