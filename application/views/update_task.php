<?php include 'head.php'; ?>
<title>Update Task</title>
<style>
	.edit-form {
		background-color: #fff;
		max-width: 600px;
		margin: auto;
		padding: 50px 70px;
		border-top-left-radius: 30px;
		border-top-right-radius: 30px;
		box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	}
	.update-button .btn-update{
	border-radius: 30px;
    padding: 10px 45%;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: 1px solid #5791ff;
    color: white;
	}
	.update-button .btn-update:hover{
	background-color: #fff;
    border: 1px solid #5791ff;
    color: #5791ff;
	}
	.back-button{
		font-size: 1.5rem;
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
					<div class="edit-form">
					<div class="back-button">
				<a href="<?php echo base_url(); ?>"><span><i class="fas fa-chevron-left"></i></span></a>
			</div>
                    <h2 class="text-center">Edit Task</h2>
					<form action="" method="post" class="mt-3">
						<?php
                  foreach($list as $i){
                    echo '<h5>Task:</h5><input type="text" class="form-control my-3" name="taskname" value="'.$i->task.'">';
					echo '<i style="color:red;">'.form_error('taskname').'</i>';
                    echo '<h5>Description:</h5><input type="text" class="form-control my-3" name="desc" value="'.$i->description.'">';
					echo '<i style="color:red;">'.form_error('desc').'</i>';
                    echo '<h5>Task Start:</h5><input class="my-3" type="date" min="'.date('Y-m-d').'" name="start" value="'.$i->task_start.'">';
					echo '<i style="color:red;">'.form_error('start').'</i>';
                    echo '<h5>Task Due:</h5><input class="my-3" type="date" min="'.date('Y-m-d').'" name="due" value="'.$i->task_due.'">';
					echo '<i style="color:red;">'.form_error('due').'</i>';
                    }
                  ?>
				<div class="update-button text-center">
					<button type="submit" class="btn btn-primary btn-update" value="Update">Update</button>
                </div>
                </form>
					</div>
            </div>
                
        </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
