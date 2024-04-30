<?php
require_once 'pdo.php';

function cmt_insert($cmt_masp,$cmt_date,$cmter,$cmt_content){
    $sql = "insert into comments(cmt_masp,cmt_date,cmter,cmt_content) values (?,?,?,?)";
    pdo_execute($sql,$cmt_masp,$cmt_date,$cmter,$cmt_content);
}
function cmt_select($cmt_masp){
    $sql = "select * from comments where cmt_masp = ?";
    return pdo_query_one($sql,$cmt_masp);
}
function cmt_selectall(){
    $sql = "select * from comments";
    return pdo_query($sql);
}

function cmt_delete($cmt_id){
    $sql = "delete from comments where cmt_id = ?";
    return pdo_execute($sql,$cmt_id);
}