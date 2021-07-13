<?php include 'head.php'; ?>
<title>View Profile</title> 
<style> 
.inform-display{
    background-color: #fff;
	max-width: 600px;
	margin: auto;
	padding: 50px 70px;
    border-radius: 30px;
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.20);
}
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
<div class="container-fluid">
    <div class="row">
        <?php include 'sidenav.php'; ?>
        <div class="col offset-2" id="main">
            <div class="container mt-5">
            <div class="inform-display text-center">
            <h2>My Information</h2>
            <img class="rounded-circle my-2" src="../images/<?php echo $profile_pic; ?>" width="150" height="150">
            <div class="text-center mt-2">
                <?php
                echo "<p><b>Account ID: </b> ".$id."<br></p>";
                echo "<p><b>First Name: </b>".$fname."<br></p>";
                echo "<p><b>Last Name: </b>".$lname."<br></p>";
                echo "<p><b>Username: </b>".$username."<br></p>";
                echo "<p><b>Password: </b>".$password."<br></p>";
                echo "<p><b>Email: </b>".$email."<br></p>";
                ?>
                </div>
            </div>
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