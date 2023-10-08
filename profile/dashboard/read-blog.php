<?php
ob_start(); // Start output buffering
include("header.php");
require("../../database.php");
ob_end_flush(); // End output buffering and send content to the browser
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<div class="album py-5 bg-body-tertiary">
    <div class="row">
        <?php
        // Fetch blogs from the database and iterate through them
        $query = "SELECT * FROM blogs";
        $result = $con->query($query);

        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-sm-6 mb-3 mb-sm-0 p-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $row["title"]; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo substr($row["content"], 0, 100); ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="view-blog.php?id=<?php echo $row["id"] ?>"
                                    class="btn btn-sm btn-outline-primary">View</a>
                            </div>
                            <small class="text-body-secondary">
                                <?php echo $row["created_at"] ?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</div>



<?php include("footer.php"); ?>