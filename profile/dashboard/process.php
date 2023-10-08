<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $editorContent = $_POST['editor'];

    // Process the content and image URL as needed
    // For demonstration purposes, we'll simply display them
    echo '<h1>Editor Content:</h1>';
    echo '<div>' . $editorContent . '</div>';
}
?>
