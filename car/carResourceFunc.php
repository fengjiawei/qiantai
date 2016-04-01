<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 15:32
 * describe:创建车队
 */
require_once "function.php";

if($_POST['action']=='add'){
    returnJson(U."unite/createCarUser.json",$_POST);
}else if($_POST['action']=='delete'){
    returnJson(U.'unite/deleteCarUser.json',$_POST);
}