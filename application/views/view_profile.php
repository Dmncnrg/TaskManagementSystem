<html>
<title>View Profile</title> 
<body> 
<?php 

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
            </div> 
            <div class="col admindet-2"> 
            <img src="" height="200" width="200">
            </div> 
<?php
    foreach($info as $i){
    echo "id: ".$i->id."<br>";
    echo "fname: ".$i->fname."<br>";
    echo "lname: ".$i->lname."<br>";
    echo "username: ".$i->username."<br>";
    echo "password: ".$i->password."<br>";
    echo "email: ".$i->email."<br>";
    echo "profile_pic: ".$i->profile_pic."<br>";
}
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