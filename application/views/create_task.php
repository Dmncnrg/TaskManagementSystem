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
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="start" required>
                    <input type="date" min="<?php echo date('Y-m-d');?>" name="due" required> 
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>