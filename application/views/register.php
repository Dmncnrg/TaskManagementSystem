<?php
include 'head.php';
?>
        <title>Registration Form</title>
		<style>
			.register-form{
				padding: 50px 0;
			}

			.register-form form{
				background-color: #fff;
				max-width: 600px;
				margin: auto;
				padding: 50px 70px;
				border-top-left-radius: 30px;
				border-top-right-radius: 30px;
				box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
			}

			.register-form .form-icon{
				text-align: center;
				background-color: #5891ff;
				border-radius: 50%;
				font-size: 40px;
				color: white;
				width: 100px;
				height: 100px;
				margin: auto;
				line-height: 100px;
			}
			.form-title{
				margin: 20px 0;;
			} 
			.register-form .item{
				border-radius: 20px;
				margin-bottom: 25px;
				padding: 10px 20px;
			}
			.register-form .form-group .register-create{
				border-radius: 30px;
				padding: 10px 20px;
				font-size: 18px;
				font-weight: bold;
				background-color: #5791ff;
				border: none;
				color: white;
				margin-top: 20px;
			}
			.register-form .register-create:hover{
				background-color: #fff;
				border: 1px solid #5791ff ;
				color: #5791ff;
			}
			.back-button{
				font-size: 2rem;
				color: #5791ff;
			}
		</style>
    </head>
<body>
    <div class="container">
		<div class="register-form">
        <form action="do_upload" method="post" enctype="multipart/form-data">
		<div class="back-button">
				<a href="<?php echo base_url(); ?>"><span><i class="fas fa-chevron-left"></i></span></a>
			</div>
				<div class="form-icon">
					<span><i class="fas fa-tasks"></i></span>
				</div>
				<div class="form-title text-center">
				<h3>Register</h3>
				</div>
				<div class="form-group">
					<input type="text" class="form-control item" name="fname" placeholder="First Name">
					<i style="color:red;"><?php echo form_error('fname'); ?></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control item" name="lname" placeholder="Last Name">
					<i style="color:red;"><?php echo form_error('lname'); ?></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control item" name="user" placeholder="Username">
					<i style="color:red;"><?php echo form_error('user'); ?></i>
				</div>
				<div class="form-group">
					<input type="password" class="form-control item" name="pw" placeholder="Password">
					<i style="color:red;"><?php echo form_error('pw'); ?></i>
				</div>
				<div class="form-group">
					<input type="password" class="form-control item" name="cpw" placeholder="Confirm Password">
					<i style="color:red;"><?php echo form_error('cpw'); ?></i>
				</div>
				<div class="form-group">
					<input type="email" class="form-control item" name="email" placeholder="Email">
				</div>
				<input type="file" name="image"> <br>
				<i style="color:red;"><?php echo $error; ?>
					<div class="form-group">
						<button type="submit" class="btn btn-block register-create" name="Submit">Create
							Account</button>
					</div>
			</form>
		</div>
    </div>
</body>
</html>