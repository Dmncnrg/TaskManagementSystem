<html>
<title>View Profile</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body> 
<?php 
$id = $_SESSION['userinfo'][0]->id;
$fname = $_SESSION['userinfo'][0]->fname;
$lname = $_SESSION['userinfo'][0]->lname;
$username = $_SESSION['userinfo'][0]->username;
$password = $_SESSION['userinfo'][0]->password;
$email = $_SESSION['userinfo'][0]->email;
$profile_pic = $_SESSION['userinfo'][0]->profile_pic;
?>
<style> body{ 
    background-image: url('../images/background.jpg'); 
}
</style>
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

// H1 my information css (optional)
<!-- h1 {
    width:500px;
    margin: 0 auto;
    background: gray;
    text-align: center;
}
-->