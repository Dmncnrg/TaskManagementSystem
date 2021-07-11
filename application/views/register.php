<html>
    <head>
        <title>Registration Form</title>
    </head>
<body>
    <div>
        <?php echo validation_errors(); ?>
        <form action="" method="post">
            <h1>Register</h1>
            <b>First Name</b> <br>
            <input type="text" name="fname"><br>
            <b>Last Name</b><br>
            <input type="text" name="lname"><br>
            <b>Username</b><br>
            <input type="text" name="user"><br>
            <b>Password</b><br>
            <input type="password" name="pw"><br>
            <b>Confirm Password</b><br>
            <input type="password" name="cpw"><br>
            <b>Email</b><br>
            <input type="email" name="email"><br>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>
