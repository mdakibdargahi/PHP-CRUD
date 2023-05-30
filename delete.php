<?php
include 'header.php';

if (isset($_POST['deletebtn'])) {
    $conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");
    $stu_id = $_POST['sid'];

    // Perform the deletion query
    $query = "DELETE FROM `students` WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="delete.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>