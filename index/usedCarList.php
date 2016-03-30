<?php
/**
 * Created by IntelliJ IDEA.
 * User: fengjiawei
 * Date: 16/3/29
 * Time: 下午1:48
 */

$con = new mysqli("101.200.172.223:3306", "root", "logistics_mysql", "testdb");

$sql = "select * from uesd_car";
$str = $con->query($sql);
while($row1=$str->fetch_object()){
//    echo json_encode($row1);
//    $arr[]="{'Id':{$row1[0]},'pid':{$row1[1]},'Name':{$row1[2]},'url':{$row1[3]}}";
    $arr[] = $row1;

}
echo json_encode($arr);