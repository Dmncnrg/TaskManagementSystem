<?php
if(!isset($_SESSION['userinfo'])){
    echo '<script> window.location="'.base_url().'"; </script>';
}
?>