<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 15:23
 * describe:提交认证消息
 */
require_once "function.php";

//$res = http_post_json(U."unite/authTransport.json",json_encode($_POST));
//echo $res;
$_POST['licenseImage']=  base64_encode(addslashes(file_get_contents($_FILES['licenseImage']['tmp_name'])));
$_POST['transportImage']=  base64_encode(addslashes(file_get_contents($_FILES['transportImage']['tmp_name'])));
$_POST['taxImage']=  base64_encode(addslashes(file_get_contents($_FILES['taxImage']['tmp_name'])));
$_POST['codeImage']=  base64_encode(addslashes(file_get_contents($_FILES['codeImage']['tmp_name'])));
//echo json_encode($_POST);
returnJson(U."unite/authTransport.json",$_POST);