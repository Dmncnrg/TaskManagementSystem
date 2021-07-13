<?php
include 'block.php';
?>
<style>
	hr {
		color: #fff;
		height: 2px;
	}

	.navbar-brand,
	.user {
		color: #fff;
	}

	.fa-ul .fa-li .fas, li h5 {
		color: #d3eeff;
	}

	.bg-light {
		background-color: #5791ff !important;
	}

</style>
</head>
<div class="col-2 px-1 bg-light position-fixed tasknav text-center" style="height:100%;" id="sticky-sidebar">
	<div class="container-fluid">
		<a href="#" class="navbar-brand">
			<h2><b>Task Manager</b></h2>
		</a>
		<div class="row-auto flex-row align-content-center">
			<img class="rounded-circle  m-5"
				src="<?php echo base_url(); ?>/images/<?php echo $_SESSION['userinfo'][0]->profile_pic; ?>" width="150"
				height="150">
			<h3 class="user"><b><?php
                echo $_SESSION['userinfo'][0]->fname." ".$_SESSION['userinfo'][0]->lname;
                ?></b></h3>
			<hr>
		</div>
		<div class="row-auto">
			<nav class="navbar navbar-text">
				<ul class="fa-ul">
					<li><a href="<?php echo base_url(); ?>taskmanager/tasks" class="nav-link active"><span class="fa-li"><i
									class="fas fa-home"></i></span>
							<h5>Home</h5>
					</li></a>

          <li><a href="<?php echo base_url(); ?>taskmanager/profile" class="nav-link active"><span class="fa-li"><i class="fas fa-user-alt"></i></span>
                  <h5>View Profile</h5>
					</li></a>

          <li><a href="<?php echo base_url(); ?>taskmanager/logout" class="nav-link active"><span class="fa-li"><i class="fas fa-sign-out-alt"></i></span>
                  <h5>Logout</h5>
					</li></a>
				</ul>
			</nav>
		</div>
	</div>
</div>
