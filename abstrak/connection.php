<?php

$conn = mysqli_connect('localhost', 'root', '','inidata');
if (!$conn) {
	echo "database error";
}