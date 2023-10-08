<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Search Results</h1>
        
        <?php
        // Check if the "q" parameter is set in the URL
        if (isset($_GET["q"])) {
            $searchQuery = $_GET["q"];
            include("database.php");

            // Perform a database query to search for blog titles
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
                    echo "<li><a href='blog.php?title={$result}'>{$result}</a></li>";
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
</body>
</html>
