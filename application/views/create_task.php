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
                    <b>Task</b> <br>
                    <input type="text" name="taskname"><br>
                    <b>Description</b><br>
                    <input type="text" name="desc"><br>
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="start">
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="due"> 
                    <input type="submit" name="Create" value="Create">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>