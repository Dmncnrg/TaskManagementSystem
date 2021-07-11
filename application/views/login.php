<html>
    <head>
        <title>Login Form</title>
    </head>
<body>
    <div>
        <?php 
         echo validation_errors(); 
         //echo form_open('form'); 
        ?>
        <b>Login Page</b><br>
        <form action="" method="post">
            <b>Username</b><br><input type="text" name="user" value=""><br>
            <b>Password</b><br><input type="password" name="pw" value=""><br>
            <a href="register">Register</a></div>
            <input type="submit" name="Submit"><br>
        </form>
    </div>
</body>
</html>