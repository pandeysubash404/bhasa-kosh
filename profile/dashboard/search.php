<?php
include("../../database.php");
?>
<?php 
include("../session.php");
$mail = $_SESSION["email"];
$name = $_SESSION["name"];
?>

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
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">
            <span class="navbar-brand-text logo"><img src="../../images/Bhasha-Kosh Logo (1).png" style="width: 180px; height: auto;" /></span>
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" id="searchInput" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <!-- Your sidebar content here -->
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <!-- Search Results Container -->
            <div class="container mt-5">
                <h1>Search Results</h1>

                <?php
                // Check if the "q" parameter is set in the URL
                if (isset($_GET["q"])) {
                    $searchQuery = $_GET["q"];
                    
                    // Perform a database query to search for blogs based on the title
                    $sql = "SELECT * FROM blogs WHERE title LIKE ?";

                    // Create a prepared statement
                    $stmt = $con->prepare($sql);

                    // Bind the search query to the prepared statement
                    $searchParam = '%' . $searchQuery . '%';
                    $stmt->bind_param("s", $searchParam);

                    // Execute the query
                    $stmt->execute();

                    // Get the results
                    $result = $stmt->get_result();

                    // Initialize an array for search results
                    $results = [];

                    // Fetch search results from the database
                    while ($row = $result->fetch_assoc()) {
                        $results[] = $row["title"];
                    }

                    // Close the prepared statement
                    $stmt->close();

                    // Display search results
                    if (empty($results)) {
                        echo "<p>No results found for '{$searchQuery}'</p>";
                    } else {
                        echo "<ul>";
                        foreach ($results as $result) {
                            echo "<li><a href='read-blog.php?id={$result['id']}'>{$result['title']}</a></li>";
                        }
                        echo "</ul>";
                    }
                } else {
                    echo "<p>No search query specified.</p>";
                }
                ?>

                <!-- Back to search -->
                <p><a href="javascript:history.back()">Back to Search</a></p>
            </div>
            <!-- End of Search Results Container -->
        </div>
    </div>
</body>
</html>
