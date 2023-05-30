<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");
    $stu_id = $_GET['id'];
    $query = "SELECT * FROM `students`  WHERE sid = {$stu_id} ";
    $result = mysqli_query($conn, $query) or die("query unsuccessful");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="form-group">
            <label>CGPA</label>
            <input type="text" name="cgpa" value="<?php echo $row['cgpa']; ?>" />
        </div>
        <div class="form-group">
            <label>Company</label>

            <?php

                    $query1 = "SELECT * FROM `companies` ";
                    $result1 = mysqli_query($conn, $query1) or die("query unsuccessful");

                    if (mysqli_num_rows($result1) > 0) {
                    ?>
            <select name="company_id">
                <?php
                            while ($row1 = mysqli_fetch_assoc($result1)) {

                                if ($row['company_id'] == $row1['cid']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }


                                echo "<option {$select} value='{row1['cid']}'>{$row1['cname']}</option>";
                            }
                            ?>
            </select>
            <?php
                    } ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
        </div>
        <input class="submit" type="submit" value="Update" />
    </form>
    <?php
        }
    } ?>
</div>
</div>
</body>

</html>