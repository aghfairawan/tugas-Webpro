<?php
include 'connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$website = $_POST['website'];
$bio = $_POST['bio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$q1 = mysqli_query($conn,"UPDATE `profile` SET `name`='$name',`username`='$username',`website`='$website',`bio`='$bio',`email`='$email',`phone_number`='$phone',`gender`='$gender' WHERE `id_profile`='$id'");
if ($q1 >0) {
	echo "oke";
}else{
	echo "error";
}
