<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");

    $query = "SELECT * FROM `students` INNER JOIN `companies` ON students.company_id = companies.cid";
    $result = mysqli_query($conn, $query) or die("Query unsuccessful");
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>CGPA</th>
                <th>Company ID</th>
                <th>Phone</th>
                <th>Company Name</th>
                <th>CTC</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <td><?php echo $row["sid"] ?></td>
                <td><?php echo $row["sname"] ?></td>
                <td><?php echo $row["cgpa"] ?></td>
                <td><?php echo $row["company_id"] ?></td>
                <td><?php echo $row["sphone"] ?></td>
                <td><?php echo $row["cname"] ?></td>
                <td><?php echo $row["ctc"] ?></td>
                <td><?php echo $row["location"] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["sid"] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["sid"] ?>'>Delete</a>
                </td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "<h2>No record found</h2>";
    }

    mysqli_close($conn);
    ?>
</div>
</div>
</body>

</html>