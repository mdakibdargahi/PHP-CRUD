<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>CGPA</label>
            <input type="text" name="cgpa" />
        </div>
        <!-- <div class="form-group">
            <label>Company_id</label>
            <input type="text" name="company_id" />
        </div> -->
        <div class="form-group">
            <label>Company</label>
            <select name="company_id">
                <option value="" selected disabled>Select Company</option>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");

                $query = "SELECT * FROM `companies` ";
                $result = mysqli_query($conn, $query) or die("query unsuccessful");

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>