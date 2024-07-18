<?php
include '../connection.php';

$search = $_POST['search'];

$sql = "SELECT * FROM tb_shoes
        WHERE
        name LIKE '%$search%'
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