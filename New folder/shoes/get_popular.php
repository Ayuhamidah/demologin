<?php
include '../connection.php';

$min = 4.5;
$limit = 3;

$sql = "SELECT * FROM tb_shoes
        WHERE
        rating >= '$min'        
        ORDER BY rating DESC
        LIMIT $limit
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