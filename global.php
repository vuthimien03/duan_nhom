<?php
session_start();

 $VIEW_NAME = "site/home.php";
 function exist_param($fieldname){
    return array_key_exists($fieldname,$_REQUEST);
 }
 function saveFile($fieldname,$target_dir="../../upload/"){
   $fileLoad = $_FILES[$fieldname];
   $target_file = $target_dir.basename($fileLoad['name']);
   move_uploaded_file($fileLoad['tmp_name'],$target_file);
   return $fileLoad['name'];
 }
 function get_cookie($name){
  return $_COOKIE['name']??'';
}
function add_cookie($name,$values,$day){
  setcookie($name,$values, time() + (84600 * $day),'/') ;
}
function delete_cookie($name){
  add_cookie($name,'',-1);
}







