<?php
include '../connection.php';

$idCart = $_POST['id_cart'];
$quantity = $_POST['quantity'];

$sql = "UPDATE tb_cart
        SET
        quantity = '$quantity'
        WHERE
        id_cart = '$idCart'
        ";

$result = $connect->query($sql);

if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}