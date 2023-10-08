<?php
// Define the path where you want to save uploaded images
$uploadDirectory = 'uploads/';

// Check if the 'image' file input is set and not empty
if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
    $uploadedFile = $_FILES['image'];

    // Generate a unique filename for the uploaded image
    $filename = uniqid() . '_' . $uploadedFile['name'];

    // Move the uploaded image to the specified directory
    if (move_uploaded_file($uploadedFile['tmp_name'], $uploadDirectory . $filename)) {
        // Provide the image URL to TinyMCE
        echo json_encode(['location' => $uploadDirectory . $filename]);
    } else {
        echo json_encode(['error' => 'Failed to upload image.']);
    }
} else {
    echo json_encode(['error' => 'No image uploaded.']);
}
?>
