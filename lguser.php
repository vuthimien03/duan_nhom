<?php if(isset($_SESSION['user'])){
    require('dangnhap.php');
} else{
     $username = get_cookie("username");
     $user_password = get_cookie("user_password");
     require('loginx.php');
}