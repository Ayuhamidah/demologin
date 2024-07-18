<?php
include '../connection.php';

$idOrder = $_POST['id_order'];
$image = $_POST['image'];

$sql = "DELETE FROM tb_order
        WHERE
        id_order = '$idOrder'
        ";

$result = $connect->query($sql);

if($result) {
    // delete image
    unlink("../images/".$image);

    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}