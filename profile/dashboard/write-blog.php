<?php
ob_start(); // Start output buffering
include("header.php");
require("../../database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve data from the form
    $title = $_POST["title"];
    $language = $_POST["language"];
    $categories = isset($_POST["categories"]) ? implode(", ", $_POST["categories"]) : "";
    $content = $_POST["editor"]; // Use the editor content
    $email = $mail; // Use the email from header.php

    // Insert data into the database
    $query = "INSERT INTO blogs (email, title, language, categories, content) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssss", $email, $title, $language, $categories, $content);

    if ($stmt->execute()) {
        // Data inserted successfully
        header("Location: read-blog.php"); // Redirect to a success page
        exit;
    } else {
        $error_message = "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $con->close();
}

ob_end_flush(); // End output buffering and send content to the browser
?>
<!-- Rest of your code -->

    <main>
    <form method="POST" action="write-blog.php">
    <div class="m-5">
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="language">Language</label>
            <select id="language" name="language" class="form-select" required>
                <option value="English">English</option>
                <option value="Nepali">Nepali</option>
                <option value="Mathali">Mathali</option>
                <option value="Tharu">Tharu</option>
                <option value="Newari">Newari</option>
                <!-- Add more language options as needed -->
            </select>
        </div>
        <div class="mb-3">
            <label>Categories</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="categories[]" value="Festival" id="festival">
                <label class="form-check-label" for="festival">Festival</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="categories[]" value="Culture" id="culture">
                <label class="form-check-label" for="culture">Culture</label>
            </div>
            <!-- Add more category checkboxes as needed -->
        </div>
        <label for="editor">Editor</label>
        <textarea id="editor" name="editor"></textarea>
    </div>
    <button type="submit" class="btn btn-primary ms-3">Submit</button>
</form>


</main>

<!-- Include TinyMCE -->
<script src="../tinymce/js/tinymce/tinymce.min.js"></script>

<!-- Include Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+4JgoD5ko6w6+xtnjWBk0/Zgur6U21pWlC9SX2L3dcpFfn6" crossorigin="anonymous">
<script>
    tinymce.init({
        selector: '#editor',
        height: 300,
        plugins: 'image code',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image',
        image_upload_url: 'upload.php', // Define your server-side image upload endpoint
        images_upload_handler: function (blobInfo, success, failure) {
            // Customize the image upload handler as needed
        }
    });
</script>

<?php include("footer.php");?>
