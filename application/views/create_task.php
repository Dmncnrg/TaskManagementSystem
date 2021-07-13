<?php include 'head.php'; ?>
    <title>Create Task</title>
    <style>
    .create-form{
        background-color: #fff;
		max-width: 600px;
		margin: auto;
		padding: 50px 70px;
		border-top-left-radius: 30px;
		border-top-right-radius: 30px;
		box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
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
                    <h2 class="text-center">Create Task</h2>
                    <h5>Task:</h5> 
                    <input type="text" class="form-control my-3" name="taskname"><br>
                    <h5>Description:</h5>
                    <input type="text" class="form-control my-3" name="desc"><br>
                    <h5>Task Start:</h5>
                    <input type="date" class="my-3" min="<?php echo date('Y-m-d');?>" name="start">
                    <h5>Task Due:</h5>
                    <input type="date" class="my-3" min="<?php echo date('Y-m-d');?>" name="due"><br>
                    <div class="create-button text-center mt-2">
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