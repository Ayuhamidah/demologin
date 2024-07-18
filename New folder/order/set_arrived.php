<?php
include '../connection.php';

$idOrder = $_POST['id_order'];

$sql = "UPDATE tb_order
        SET
        arrived = 'Arrived'
        WHERE
        id_order = '$idOrder'
        ";

$result = $connect->query($sql);

if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}