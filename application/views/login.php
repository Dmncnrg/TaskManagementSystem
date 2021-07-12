<?php

include 'head.php';
?>
        <title>Login Form</title>
    </head>
<body>
    <div class="container">
        <h1>Login Page</h1><br>
        <?php echo validation_errors(); ?>
        <form action="" method="post">
            <h4>Username</h4><input type="text" class="form-control" name="user" value=""><br>
            <h4>Password</h4><input type="password" class="form-control" name="pw" value=""><br>
            <a href="TaskManager/register">Register</a><br>
            <input type="submit" class="btn btn-primary" name="Submit">
        </form>
    </div>
</body>
</html>