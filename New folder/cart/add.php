<?php
include '../connection.php';

$idUser = $_POST['id_user'];
$idShoes = $_POST['id_shoes'];
$quantity = $_POST['quantity'];
$color = $_POST['color'];
$size = $_POST['size'];

$sql =  "INSERT INTO tb_cart SET
        id_user = '$idUser',
        id_shoes = '$idShoes',
        quantity = '$quantity',
        color = '$color',
        size = '$size'
        ";

$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}