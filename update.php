<?php

header("Content-Type:JSON");
header("Access-Control-Allow-Origin : *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With");


$data = json_decode(file_get_contents("php://input"),true);
$data_sno = $data['sno'];
$name = $data['sname'];
$city = $data['city'];
$age = $data['age'];

// header("Content-Type:JSON");

include 'config.php';

$sql = "UPDATE data SET name = '{$name}' , age = '{$age}' , city = '{$city}' WHERE sno = {$data_sno}";

if(mysqli_query($con, $sql))
{
    echo json_encode(array('message' => 'STUDENT RECORD UPDATED.','status' =>true));
}
else
{
    echo json_encode(array('message' => 'STUDENT RECORD NOT UPDATED.','status' =>false));
}

?>  
