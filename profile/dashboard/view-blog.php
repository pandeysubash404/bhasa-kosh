<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">
            <span class="navbar-brand-text logo"><img src="../../images/Bhasha-Kosh Logo (1).png"
                    style="width: 180px; height: auto;" /></span>
        </a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>
    <div class="mx-auto p-2 mt-100" style="width: 200px;"></div>
    <div id="layoutSidenav_content ms-2">
        <main>
            <?php
            require("../../database.php");

            if (isset($_GET["id"])) {
                $blogId = $_GET["id"];

                // Fetch the blog content by ID
                $query = "SELECT * FROM blogs WHERE id = ?";
                $stmt = $con->prepare($query);
                $stmt->bind_param("i", $blogId);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    ?>
                    <!-- Display the blog content -->
                    <div class=" container mt-100 p-5">
                        <h1 class="mt-200">
                            <?php echo $row["title"]; ?>
                        </h1>
                        <p class="text mb-0">By
                            <?php echo $row["email"] ?>
                        </p>
                        <p class="text-secondary pb-4 border-bottom">Posted on
                            <?php echo $row["created_at"] ?>
                        </p>
                        <div class="content">
                            <?php echo $row["content"] ?>
                        </div>
                    </div>;
                    <?php
                } else {
                    echo "Blog not found.";
                }

                $stmt->close();
            } else {
                echo "Invalid blog ID.";
            }
            ?>

            <div class="container px-4 py-5" id="custom-cards">
                <h2 class="pb-2 border-bottom">Suggested blogs</h2>

                <div class="album py-5 bg-body-tertiary">
                    <div class="row">
                        <?php
                        // Fetch blogs from the database and iterate through them
                        $query = "SELECT * FROM blogs LIMIT 3";
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
    </div>

    </main>
    </div>
    </div>
    <?php
    include("footer.php");
    ?>