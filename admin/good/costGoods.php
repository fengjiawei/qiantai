<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:22
 * describe:输入实际货物信息和运费信息
 *
 */

require_once "function.php";
//echo json_encode($_POST);

$result = http_post_json("http://101.200.172.223:8080/unite/actualGoods.json",json_encode($_POST));
echo $result;