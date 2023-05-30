<?php
$stu_id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");

$query = "DELETE  FROM `students` WHERE sid={$stu_id} ";
$result = mysqli_query($conn, $query) or die("query unsuccessful");
header("Location: http://localhost/PHP-program/YB_Projects/crud/index.php");
mysqli_close($conn);
