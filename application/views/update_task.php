<?php include 'head.php'; ?>
    <title>Update Task</title>
</head>
<body>
    <!--Code Here-->
<div class="container-fluid">
    <div class="row">
        <?php include 'sidenav.php'; ?>
        <div class="col offset-2" id="main">
            <div class="container">
                <h1>Edit Task</h1>
                <form action="" method="post">
                    
                  <?php
                  foreach($list as $i){
                    echo '<h4>Task:</h4><input type="text" class="form-control" name="taskname" value="'.$i->task.'">';
                    echo '<h4>Description:</h4><input type="text" class="form-control" name="desc" value="'.$i->description.'">';
                    echo '<h4>Task Start:</h4><input type="date" min="'.date('Y-m-d').'" name="start" value="'.$i->task_start.'">';
                    echo '<h4>Task Due:</h4><input type="date" min="'.date('Y-m-d').'" name="due" value="'.$i->task_due.'">';
                }
                  ?>
                    <br><input type="submit" class="btn btn-primary" name="Update" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>