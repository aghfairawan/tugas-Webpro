<?php
include 'connection.php';
header('Content-Type: application/json');
session_start();
$username = $_SESSION['username'];
$q1 = mysqli_query($conn,"SELECT * FROM `profile` WHERE `username`='$username'");
foreach ($q1 as $v1) {
	$data = json_encode($v1);
}
echo $data;