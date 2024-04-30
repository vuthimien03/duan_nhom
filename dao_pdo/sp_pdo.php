<?php
require_once 'pdo.php';
require_once 'cate_pdo.php';
function sp_selectAll(){
    $sql = "select * from sps";
    return pdo_query($sql);
}
function sp_selectone($ma_sp){
    $sql = "select * from sps where ma_sp = ?"; 
    return pdo_query_one($sql,$ma_sp);
}
function sp_insert($ten_sp,$img,$gia_sp){
    $sql = "insert into sps(ten_sp,img,gia_sp) values (?,?,?)";
    pdo_execute($sql,$ten_sp,$img,$gia_sp);
}

function sp_delete($ma_sp){
    $sql = "delete from sps where ma_sp = ?";
    pdo_execute($sql,$ma_sp);
}
function sp_empty(){
    $sql = "delete * from sps ";
    pdo_execute($sql);
}

function sp_update($ten_sp,$img,$gia_sp,$ma_sp){
    $sql = "update sps set ten_sp =?,img=?,gia_sp=? where ma_sp = ?";
    pdo_execute($sql,$ten_sp,$img,$gia_sp,$ma_sp);
}

function sp_by_gia($gia_sp){
    $sql = "select * from sps where gia_sp = ?"; 
    return pdo_query($sql,$gia_sp);
}

function sp_by_cate($cate_id){
    $sql = "select * from sps inner join sp_cates on sps.ma_sp = sp_cates.ma_sp
    inner join categories on sp_cates.cate_id = categories.cate_id
     having categories.cate_id = ?"; 
    return pdo_query($sql,$cate_id);
}

function sp_by_tag($ma_sp, $tag_id, $tag_value){
    $sql = "select sps.ma_sp, sps.ten_sp, sps.img, sps.gia_sp from sps innerjoin sp_tags on sps.ma_sp = sp_tags.ma_sp having tag_value = ?"; 
    return pdo_query($sql,$ma_sp, $tag_id, $tag_value);
}
function sp_by_cate_limit($cate_id){
    $sql = "select * from sps inner join sp_cates on sps.ma_sp = sp_cates.ma_sp
    inner join categories on sp_cates.cate_id = categories.cate_id
     having categories.cate_id = ? limit 8"; 
    return pdo_query($sql,$cate_id);
}
function sp_selectMasp(){
    $sql = "select ma_sp from sps";
    return pdo_query($sql);
}
function sp_select_limited($offset){
    $sql = "select * from sps limit 8 offset $offset  ?";
    return pdo_query($sql,$offset);
}


$target_per_page = 8;
$a = sp_selectAll();

$count = count($a);
$page_count = ceil($count/$target_per_page);
// echo $count;
// echo $page_count;



if(isset($_GET['page'])){
    $page = $_GET['page'];
    if($page <= 0){
        $page = 1;
    }
    if($page > $page_count){
        $page = $page_count;
    }
}
else {
    $page = 1;
}
$offset = ($page - 1) * $target_per_page;
function sp_offset($offset, $limit = 8){
    $sql = "select * from sps limit $offset, $limit";
    return pdo_query($sql);
}
function sp_by_cate_offset($cate_id,$offset,$limit=8){
    $sql = "select * from sps inner join sp_cates on sps.ma_sp = sp_cates.ma_sp
    inner join categories on sp_cates.cate_id = categories.cate_id
     having categories.cate_id = ? limit $limit offset $offset"; 
    return pdo_query($sql,$cate_id);
}
function search($key){
    $sql = "select * from sps inner join sp_cates on sps.ma_sp = sp_cates.ma_sp INNER join categories on sp_cates.cate_id = categories.cate_id having sps.ten_sp like ? or categories.cate_name like ? or sps.gia_sp = ?";
    return pdo_query($sql,$key,$key,$key);

}

function tag_select($ma_sp,$tag_id){
    $sql = "select sp_tags.tag_value from sp_tags inner join sps on sp_tags.ma_sp = sps.ma_sp where sps.ma_sp = ? and sp_tags.tag_id = ?";
    return pdo_query_one($sql,$ma_sp,$tag_id);
}
function count_masp($gia1,$gia2){
    $sql = "select count(ma_sp) from sps where gia_sp > $gia1 and gia_sp < $gia2";
    return pdo_query($sql);
}