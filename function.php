<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/9
 * Time: 14:12
 */
define('url','http://101.200.172.223:8080/');

function http_post_json($url, $jsonStr)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonStr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($jsonStr)
        )
    );
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//    return array($httpCode, $response);
//    json转数组
//    return json_decode($response,true);
    return $response;
}

function returnJson($url,$params){
    $result = http_post_json($url, json_encode($params));

//    if (json_decode($result)->result == 'success') {
    echo $result;
//    }
}
function create_uuid(){
    $units = array();
    for($i=0;$i<1000000;$i++){
        $units[]=md5(uniqid(md5(microtime(true)),true));
    }
    $values  = array_count_values($units);
    $duplicates = [];
    foreach($values as $k=>$v){
        if($v>1){
            $duplicates[$k]=$v;
        }
    }
    echo '<pre>';
    print_r($duplicates);
    echo '</pre>';
}
