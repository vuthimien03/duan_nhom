<?php
require_once 'pdo.php';

function user_select_one($user){
    $sql = "select * from users where username = ?";
    return pdo_query_one($sql,$user);
}
function user_register($username,$user_mail,$user_phone,$user_address,$user_password){
    $sql = "insert into users(username,user_mail,user_phone,user_address,user_password) values (?,?,?,?,?)";
    pdo_execute($sql,$username,$user_mail,$user_phone,$user_address,$user_password);
}
function user_select_all(){
    $sql = "select * from users ";
    return pdo_query($sql);
}
function user_bill($username){
    $sql = "select count(ma_hd) from bills where hoten = ?";
    return pdo_query_one($sql,$username);
}
function user_update($user_mail,$user_phone,$user_address,$username){
    $sql = "update users set user_mail = ?,user_phone = ?,user_address = ? where username = ?";
    pdo_execute($sql,$user_mail,$user_phone,$user_address,$username);
}