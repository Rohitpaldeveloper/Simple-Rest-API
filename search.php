<?php

header("Content-Type:JSON");

$data = json_decode(file_get_contents("php://input"),true);
$search_value = $data['search'];

// header("Content-Type:JSON");

include 'config.php';

$sql = "SELECT * FROM data WHERE name LIKE '%{$search_value}%'";
$result = mysqli_query($con, $sql) or die("SQL Quey failed.");

if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}
else
{
    echo json_encode(array('message' => 'NO SEARCH FOUND.','status' =>false));
}

?>
