<?php

header("Content-Type:JSON");

include 'config.php';

$sql = "SELECT * FROM data";
$result = mysqli_query($con, $sql) or die("SQL Quey failed.");

if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}
else
{
    echo json_encode(array('message' => 'NO RECORD FOUND.','status' =>false));
}

?>
