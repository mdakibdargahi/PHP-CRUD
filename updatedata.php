<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_cgpa = $_POST['cgpa'];
$stu_company = $_POST['company_id'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");

// Check if the company_id exists in the companies table
$checkQuery = "SELECT cid FROM companies WHERE cid = '{$stu_company}'";
$checkResult = mysqli_query($conn, $checkQuery);
if (mysqli_num_rows($checkResult) > 0) {
    // Update the student record
    $query = "UPDATE students SET sname='{$stu_name}', cgpa='{$stu_cgpa}', company_id='{$stu_company}', sphone='{$stu_phone}' WHERE sid={$stu_id}";
    $result = mysqli_query($conn, $query) or die("Query unsuccessful");
    mysqli_close($conn);

    header("Location: http://localhost/PHP-program/YB_Projects/crud/index.php");
    exit;
} else {
    echo "Invalid company_id. Please provide a valid company_id.";
}
