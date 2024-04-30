<?php
if(isset($_SESSION['adm'])){
    require('dangnhapinfo.php');
} else{
     $adm_id = get_cookie("adm_id");
     $pass = get_cookie("pass");
     require('loginx.php');
}
