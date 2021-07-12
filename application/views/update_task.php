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
                <form action="" method="post">
                  <?php
                  foreach($list as $i){
                    echo "taskname: ".$i->task."<br>";
                    echo "desc: ".$i->description."<br>";
                    echo "start: ".$i->task_start."<br>";
                    echo "due: ".$i->task_due."<br>";
                }
                  ?>
                    <b>Task</b> <br>
                    <input type="text" name="taskname"><br>
                    <b>Description</b><br>
                    <input type="text" name="desc"><br>
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="start" required>
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="due" required> 
                    <input type="submit" name="Update" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>