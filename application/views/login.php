<?php
include 'head.php';
?>
    <title>Login Form</title>
    </head>
<body>
    <div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="login-form">
        <form action="" method="post">
            <div class="form-icon">
                <span><i class="fas fa-tasks"></i></span>
            </div>
            <div class="form-title text-center">
				<h3>Login</h3>
				</div>
            <div class="form-group">
                <input type="text" class="form-control item"  name="user" placeholder="Username">
                <i style="color:red;"><?php echo form_error('user'); ?></i>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item"  name="pw" placeholder="Password">
                <i style="color:red;"><?php echo form_error('pw'); ?></i>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" name="Submit">Create Account</button>
            </div>
            <div class="row">
            <div class="col"><hr></div>
            <div class="col-auto">or</div>
            <div class="col"><hr></div>
            </div>
            <div class="form-group">
                <a href="TaskManager/register" class="btn btn-block register" role="button" aria-pressed="true">Register</a>
            </div>
        </form>
    </div>
</body>
</html>