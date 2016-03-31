<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/28
 * Time: 14:36
 * describe:接受杂费
 */
require_once "function.php";
$result = http_post_json(U."unite/replyExtras.json", json_encode($_POST));
echo $result;