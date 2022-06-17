<?php

header("Content-Type:JSON");
header("Access-Control-Allow-Origin : *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"),true);
$name = $data['sname'];
$city = $data['city'];
$age = $data['age'];

// header("Content-Type:JSON");

include 'config.php';

$sql = "INSERT INTO data(name, age, city) VALUES ('{$name}','{$age}','{$city}')";

if(mysqli_query($con, $sql))
{
    echo json_encode(array('message' => 'STUDENT RECORD INSERTED.','status' =>true));
}
else
{
    echo json_encode(array('message' => 'STUDENT RECORD NOT INSERTED.','status' =>false));
}

?>  
