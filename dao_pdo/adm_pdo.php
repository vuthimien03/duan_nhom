<?php
//require_once 'global.php';
require_once 'pdo.php';

function adm_select_one($adm_id){
    $sql = "select * from adm where adm_id = ?";
    return pdo_query_one($sql,$adm_id);
}