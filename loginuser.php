<?php
require_once ('global.php');
require_once('dao_pdo/user_pdo.php');

extract($_REQUEST);
if(exist_param('user_login')){
    if(isset($_SESSION['giohang'])){
        unset($_SESSION['giohang']);
    }
    $user = user_select_one($username);
    if($user){
        if($user['user_password']==$user_password){
            $mess = "Login Success!";
            if(exist_param('ghi_nho')){
                add_cookie('username',$username,1);
                add_cookie('user_password',$user_password,1);
            }
            else{
                delete_cookie('username');
                delete_cookie('user_password');
            }
            $_SESSION['user']=$user;
            if(isset($_SESSION['request_url'])){
                header('location: '.$_SESSION['request_url']);
            }
            echo "
            <script>
            alert('Success logged in! ');
            window.location.href='http://localhost/duan1_php/user/index.php?act=home';
            </script>
            ";
        }
        else{
            $mess = "Wrong password";
            echo "
            <script>
            alert('False password, retry it please!');
            window.location.href='http://localhost/duan1_php/index.php?act=home';
            </script>
            ";
        }
    }
    else{
        $mess = "Wrong Login pass";
        echo "
            <script>
            alert('False password or username, retry it please!');
            window.location.href='http://localhost/duan1_php/index.php?act=home';
            </script>
            ";
    }
}
else{
    session_unset();
    $username = get_cookie('username');
    $user_password = get_cookie('user_password');
    echo "
        <script>
        alert('Logged out!');
        window.location.href='http://localhost/duan1_php/index.php';
        </script>
        ";

}