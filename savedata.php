<?php

$stu_name = $_POST['sname'];
$stu_cgpa = $_POST['cgpa'];
$stu_company = $_POST['company_id'];
$stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");

$query = "INSERT INTO students(sname,cgpa,company_id,sphone) VALUES('{$stu_name}','{$stu_cgpa}','{$stu_company}','{$stu_phone}')";
$result = mysqli_query($conn, $query) or die("query unsuccessful");
header("Location: http://localhost/PHP-program/YB_Projects/crud/index.php");
mysqli_close($conn);
?>