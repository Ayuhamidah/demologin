<?php
include '../connection.php';

$idUser = $_POST['id_user'];

$sql = "SELECT * FROM tb_order
        WHERE
        id_user = '$idUser' AND
        arrived = 'Arrived'
        ";

$result = $connect->query($sql);

if($result->num_rows > 0) {    
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode(array(
        "success"=>true,
        "data"=> $data,
    ));
} else {
    echo json_encode(array(
        "success"=>false,
    ));
}