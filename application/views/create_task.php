<?php include 'head.php'; ?>
    <title>Create Task</title>
</head>
<body>
    <!--Code Here-->
<div class="container-fluid">
    <div class="row">
        <?php include 'sidenav.php'; ?>
        <div class="col offset-2" id="main">
            <div class="container">
                <form action="" method="post">
                    <h1>Create Task</h1>
                    <h4>Task:</h4> 
                    <input type="text" class="form-control" name="taskname"><br>
                    <h4>Description:</h4>
                    <input type="text" class="form-control" name="desc"><br>
                    <h4>Task Start:</h4>
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="start">
                    <h4>Task Due:</h4>
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="due"><br>
                    <input type="submit" class="btn btn-primary" name="Create" value="Create">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>