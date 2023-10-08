<?php require ("header.php"); ?>

<div class="header-banner">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row text-center justify-content-center">
            <h1 class="text-blue fw-6 lh-17 display-5">Translate to your language in just a <span class="text-lowercase text-primary">second!</span></h1>
            <p class="text-grey fs-4 mt-3 mb-5">Easy to use. Time-saver. Professional.</p>
            <button class="btn btn-lg text-capitalize btn-primary btn-banner fs-4" data-bs-toggle="modal" data-bs-target="#loginModal">let's get started</button>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<main>
    <section class="steps py-8">
        <!-- Translator Container -->
        <div class="container mt-0 align-items-center justify-content-center">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <h2>Translate</h2>
                    <div class="input-group">
                        <textarea id="sourceText" class="form-control mb-3" rows="7" placeholder="Enter text to translate"></textarea>
                        <button class="btn btn-primary btn-sm" onclick="copyToClipboard('sourceText')">Copy</button>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <h2>Translation</h2>
                    <div class="input-group">
                        <textarea id="translationText" class="form-control mb-3" rows="7" readonly></textarea>
                        <button class="btn btn-primary btn-sm" onclick="copyToClipboard('translationText')">Copy</button>
                    </div>
                </div>
            </div>

            <!-- Language Selection and Translate Button -->
            <div class="row mt-3">
                <div class="col-md-6">
                    <select class="form-select" aria-label="Select source language">
                        <option selected>Select source language</option>
                        <option value="en">English</option>
                        <option value="es">Spanish</option>
                        <option value="fr">French</option>
                        <!-- Add more language options as needed -->
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Select target language">
                        <option selected>Select target language</option>
                        <option value="en">English</option>
                        <option value="es">Spanish</option>
                        <option value="fr">French</option>
                        <!-- Add more language options as needed -->
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <button style="width: 100px;" class="btn btn-primary btn-block" onclick="translateText()">Translate</button>
                </div>
            </div>
        </div>
    </section>

    <section class="templates py-8 bg-secondary">
        <!-- Your templates section content goes here -->
    </section>
</main>

<!-- Chefs Section -->
<section id="chefs" class="chefs">
    <!-- Your chefs section content goes here -->
</section>

<?php include("services.php"); ?>

<!-- Add Bootstrap JS (optional) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Function to Copy Text to Clipboard and Translate Text -->
<script>
    function copyToClipboard(elementId) {
        var textArea = document.getElementById(elementId);
        textArea.select();
        document.execCommand('copy');
    }

    function translateText() {
        alert('Translation functionality will be implemented here.');
    }
</script>

<?php require ("footer.php"); ?>
