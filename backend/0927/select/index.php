<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require './../db_connection.php';

mysqli_query($db_conn,"SET NAMES 'UTF8';");

$allblogs = mysqli_query($db_conn,"SELECT `blog_id`, `blog_title`, `blog_content`, `blog_author`, `blog_createdate` FROM `blog`");
if(mysqli_num_rows($allblogs) > 0){
    $allblogs = mysqli_fetch_all($allblogs,MYSQLI_ASSOC);
    echo json_encode(["success"=>1,"allblogs"=>$allblogs]);
}
else{
    echo json_encode(["success"=>0]);
}