<?php
/**
 * Created by IntelliJ IDEA.
 * User: fengjiawei
 * Date: 16/3/25
 * Time: 下午4:17
 */


$name = $_FILES['carimg']['name'];
$carname = $_POST['carname'];
$carprice = $_POST['carprice'];
$carimg = uniqid() . $name;
if ($name) {

    move_uploaded_file($_FILES["carimg"]["tmp_name"],
        "upload/" . $carimg);
    $con = new mysqli("101.200.172.223:3306", "root", "logistics_mysql", "testdb");
    $sql = "INSERT INTO uesd_car (carname, carprice, carimg) VALUES ('$carname','$carprice','$carimg')";
    if ($con->query($sql) === TRUE) {
        echo json_encode(array('result'=>'success'));
    } else {
        echo json_encode(array('result'=>'error'));;
    }

    $con->close();
}

