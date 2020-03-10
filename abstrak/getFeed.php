<?php
include 'connection.php';
header('Content-Type: application/json');
$q1 = mysqli_query($conn,"SELECT * FROM `photo`");
$data = array();
while ($row = mysqli_fetch_assoc($q1)) {
    // $data = json_encode($row);
	array_push($data, $row);
    // print_r($row);
}
$v1 = json_encode($data);
echo $v1;