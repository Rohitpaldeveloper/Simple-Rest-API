<?php

header("Content-Type:JSON");
header("Access-Control-Allow-Origin : *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"),true);
$data_sno = $data['sno'];

// header("Content-Type:JSON");

include 'config.php';

$sql = "DELETE FROM data WHERE sno = {$data_sno}";

if(mysqli_query($con, $sql))
{
    echo json_encode(array('message' => 'STUDENT RECORD DELETE.','status' =>false));
}
else
{
    echo json_encode(array('message' => 'STUDENT RECORD NOT DELETE.','status' =>false));
}

?>
