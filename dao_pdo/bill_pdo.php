<?php
require_once 'pdo.php';
function bills_selectAll(){
    $sql = "select * from bills";
    return pdo_query($sql);
}
function bills_selecttheoten($hoten){
    $sql = "select * from bills where hoten = ?"; 
    return pdo_query($sql,$hoten);
}
function bills_selectone($ma_hd){
    $sql = "select * from bills where ma_hd = ?"; 
    return pdo_query_one($sql,$ma_hd);
}
function bills_insert($ma_hd,$tong_tien,$tongsl,$hoten,$diachi,$sdt,$payment,$tensp,$hasp){
    $sql = "insert into bills(ma_hd,tong_tien,tongsl,hoten,diachi,sdt,payment,tensp,hasp) values (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ma_hd,$tong_tien,$tongsl,$hoten,$diachi,$sdt,$payment,$tensp,$hasp);
}

function bills_delete($ma_hd){
    $sql = "delete from bills where ma_hd = ?";
    pdo_execute($sql,$ma_hd);
}

// function gio_hang_update($ten_sp,$sluong,$gia_sp){
//     $sql = "update gio_hang set sluong =?,gia_sp=? where ten_sp = ?";
//     pdo_execute($sql,$sluong,$gia_sp,$ten_sp);
// }

function status_update($ma_hd){
    
}
function status_select(){
    $sql = "select * from ql_bills";
    return pdo_query($sql);
}
function status_select1($ma_hd){
    $sql = "select * from ql_bills where ma_hd = ?";
    return pdo_query_one($sql,$ma_hd);
}
function stt_insert($ma_hd,$stt_id){
    $sql = "insert into ql_bills(ma_hd,stt_id) values (?,?)";
    pdo_execute($sql,$ma_hd,$stt_id);
}
function stt_update($stt_id,$ma_hd){
    $sql = "update ql_bills set stt_id = ? where ma_hd = ?";
    pdo_execute($sql,$stt_id,$ma_hd);
}