<?php include 'head.php'; ?>
<title>View Profile</title> 
<style> 

</style>
</head>
<body> 
<?php 
include 'sidenav.php';
$id = $_SESSION['userinfo'][0]->id;
$fname = $_SESSION['userinfo'][0]->fname;
$lname = $_SESSION['userinfo'][0]->lname;
$username = $_SESSION['userinfo'][0]->username;
$password = $_SESSION['userinfo'][0]->password;
$email = $_SESSION['userinfo'][0]->email;
$profile_pic = $_SESSION['userinfo'][0]->profile_pic;
?>
<div class="col offset-2" id="main">
    <div class="container">
        <div class="row"> 
            <h1>My Information</h1> 
            <div style="text-align:right;"><a href="tasks">Back</a></div>
            <div class="admindet"> 
                <div class="col admindet-1">
                </div> 
                <div class="col admindet-2"> 
                    <img class="rounded-circle" src="../images/<?php echo $profile_pic; ?>" width="150" height="150">
                </div> 
            <?php
                echo "id: ".$id."<br>";
                echo "fname: ".$fname."<br>";
                echo "lname: ".$lname."<br>";
                echo "username: ".$username."<br>";
                echo "password: ".$password."<br>";
                echo "email: ".$email."<br>";
            ?>
            </div> 
        </div>
    </div> 
</div> 
</body> 
</html>
<!-- h1 {
    width:500px;
    margin: 0 auto;
    background: gray;
    text-align: center;
}
-->