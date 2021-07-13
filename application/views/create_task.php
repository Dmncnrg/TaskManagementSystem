<?php include 'head.php'; ?>
    <title>Create Task</title>
    <style>
    .create-form{
        background-color: #fff;
		max-width: 600px;
		margin: auto;
		padding: 50px 70px;
        border-radius: 30px;
		box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.20);
    }
    .back-button{
		font-size: 1.5rem;
		color: #5791ff;
	}
    .create-button .btn-create{
    border-radius: 30px;
    padding: 10px 45%;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: 1px solid #5791ff;
    color: white;
    }
    .create-button .btn-create:hover{
        background-color: #fff;
    border: 1px solid #5791ff;
    color: #5791ff;
    }
    </style>
</head>
<body>
    <!--Code Here-->
<div class="container-fluid">
    <div class="row">
        <?php include 'sidenav.php'; ?>
        <div class="col offset-2" id="main">
            <div class="container mt-5">
            <div class="create-form">
				<div class="back-button">
				<a href="<?php echo base_url(); ?>"><span><i class="fas fa-chevron-left"></i></span></a>
			</div>
                <form action="" method="post">
                    <h3 class="text-center">Create Task</h3>
                    <h5>Task:</h5> 
                    <input type="text" class="form-control my-2" name="taskname"><br>
                    <i style="color:red;"><?php echo form_error('taskname'); ?></i>
                    <h5>Description:</h5>
                    <input type="text" class="form-control my-2" name="desc"><br>
                    <i style="color:red;"><?php echo form_error('desc'); ?></i>
                    <h5>Task Start:</h5>
                    <input type="date" class="mb-3" min="<?php echo date('Y-m-d');?>" name="start">
                    <i style="color:red;"><?php echo form_error('start'); ?></i>
                    <h5>Task Due:</h5>
                    <input type="date" class="my-2" min="<?php echo date('Y-m-d');?>" name="due"><br>
                    <i style="color:red;"><?php echo form_error('due'); ?></i>
                    <div class="create-button text-center mt-3">
					<button type="submit" class="btn btn-primary btn-create" name="Create" value="Create">Create</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>