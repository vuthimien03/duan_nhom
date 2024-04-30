<?php

require_once 'pdo.php';
function cate_selectAll(){
    $sql = "select * from categories";
    return pdo_query($sql);
}
function cate_insert($cate_id,$cate_name){
    $sql = "insert into categories(cate_id, cate_name) values (?,?)";
    pdo_execute($sql,$cate_id,$cate_name);
}
function cate_selectOne($cate_id){
    $sql = "select * from categories where cate_id = ?";
    return pdo_query_one($sql,$cate_id);
}
function cate_delete($cate_id){
    $sql = "delete from categories where cate_id = ?";
    pdo_execute($sql,$cate_id);
}
function cate_empty(){  
    $sql = "delete * from categories";
    pdo_execute($sql);
}
function cate_update($cate_name,$cate_id){
    $sql = "update categories set cate_name = ? where cate_id = ?";
    pdo_execute($sql,$cate_name, $cate_id);
}
function count_cate($cate_id){
    $sql = "select count(cate_id) from sp_cates where cate_id = ?";
    return pdo_query($sql,$cate_id);
}
function cate_name($cate_id){
    $sql = "select cate_name from categories where cate_id = ?";
    return pdo_query($sql,$cate_id);
}
function count_cateid(){
    $sql = "SELECT COUNT(*),cate_id FROM sp_cates GROUP BY cate_id";
    return pdo_query($sql);
}
function cate_id_by_masp($ma_sp){
    $sql = "select cate_id from sp_cates INNER JOIN sps on sp_cates.ma_sp = sps.ma_sp WHERE sps.ma_sp = ?";
    return pdo_query($sql,$ma_sp);
}