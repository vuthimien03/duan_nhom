<?php
require_once ('global.php');
require_once('dao_pdo/adm_pdo.php');

extract($_REQUEST);
if(exist_param('adm_login')){
    $adm = adm_select_one($adm_id);
    if($adm){
        if($adm['pass']==$pass){
            $mess = "Login Success!";
            if(exist_param('ghi_nho')){
                add_cookie('adm_id',$adm_id,1);
                add_cookie('pass',$pass,1);
            }
            else{
                delete_cookie('adm_id');
                delete_cookie('pass');
            }
            $_SESSION['adm']=$adm;
            if(isset($_SESSION['request_url'])){
                header('location: '.$_SESSION['request_url']);
            }
            echo "
            <script>
            alert('Success logged in! Direct to management page!');
            window.location.href='http://localhost/duan1_php/adm/site/index.php?act=home';
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
    $adm_id = get_cookie('adm_id');
    $pass = get_cookie('pass');
    echo "
        <script>
        alert('Logged out!');
        window.location.href='http://localhost/duan1_php/index.php';
        </script>
        ";
}
