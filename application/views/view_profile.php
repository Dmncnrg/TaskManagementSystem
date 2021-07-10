<html>
<title>View Profile</title> 
<body> 
<?php 
/*$userinfo = $_SESSION['userinfo']; 
$id = $userinfo[0]; 
$fullname = $userinfo[1]." ".$userinfo[2]." ".$userinfo[3]; 
$access = $userinfo[9]; $bday = $userinfo[6]; 
$contact = $userinfo[4]; $email = $userinfo[5];
/* if(isset($userinfo[11])){ $file = $userinfo[11]; }*/ 
/*if(isset($_POST['Upload'])){ 
    if($_FILES['image']["error"] > 0){ 
        $error = $_FILES["image"]["error"]; 
        }else{ 
            //$file =file_get_contents($_FILES["image"]["tmp_name"]); 
            $userinfo[11] = addslashes(file_get_contents($_FILES["image"]["tmp_name"]
)); 
            mysqli_query($DBConnect,"UPDATE tsa4 SET Image='$userinfo[11]' WHERE ID=$id") or die("Unable to connect".mysql_error()); 
            $query = mysqli_query($DBConnect,"SELECT * from tsa4 WHERE id = $id"); 
            $total = mysqli_num_rows($query); 
            $userinfo = mysqli_fetch_array($query); 
            $_SESSION['userinfo'] = $userinfo; 
    } 
}*/
?>
<style> body{ 
    background-image: url('../images/background.jpg');
}
</style>
<div class="container"> 
    <div class="row"> 
        <h1>My Information</h1> 
        <div style="text-align:right;"><a href="">Back</a></div>
        <div class="admindet"> 
            <div class="col admindet-1">
                <!--
                <b>Welcome </b><br> 
                <b>Userlevel: </b><br> 
                <b>Birthday: </b><br> 
                <b>Contact: </b><br> 
                <b>Email: </b><br>
                --> 
            </div> 
            <div class="col admindet-2"> 
                <img src="" height="200" width="200"> Preview 
            </div> 
        </div> 
        <div class="upload_img"> 
            <h1>-Upload Image-</h1> 
            <?php 
            /*if(isset($error)){ 
                echo '<p class="error_message">'.$error.'</p>'; 
                } 
                */
                ?>
                <form enctype="multipart/form-data" method="post"> 
                <input type="file" name="image" required><br> 
                <input type="submit" value="Upload Image" name="Upload"> 
            </form> 
        </div>
     </div> 
    </div> 
</body> 
</html>