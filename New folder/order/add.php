<?php
include '../connection.php';

$idUser = $_POST['id_user'];
$listShop = $_POST['list_shop'];
$delivery = $_POST['delivery'];
$payment = $_POST['payment'];
$note = $_POST['note'];
$total = $_POST['total'];
$image = $_POST['image'];
$imageBase64 = $_POST['image_file'];

$sql = "INSERT INTO tb_order
        SET
        id_user = '$idUser',
        list_shop = '$listShop',
        delivery = '$delivery',
        payment = '$payment',
        note = '$note',
        total = '$total',
        image = '$image'
        ";

$result = $connect->query($sql);

if($result) {
    // save image
    $imageFile = base64_decode($imageBase64);
    file_put_contents("../images/".$image, $imageFile);

    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}