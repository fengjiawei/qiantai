<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/28
 * Time: 14:24
 * describe:接受运费
 */
require_once "function.php";
$result = http_post_json(U."unite/replyCost.json", json_encode($_POST));
echo $result;