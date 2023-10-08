<?php 
require ("header.php"); 
?>
<div class="header-banner">
<div class="container h-100 d-flex align-items-center justify-content-center">
    <div class = "row text-center justify-content-center">
        <h1 class = "text-blue fw-6 lh-17 display-5">Translate to your language in just a <span class = "text-lowercase text-primary">second!</span></h1>
        <p class = "text-grey fs-4 mt-3 mb-5">Easy to use. Time-saver. Professional.</p>
        <!-- <button type="button" class="btn btn-primary my-2 btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal">Get started</button> -->
        <button class = "btn btn-lg text-capitalize btn-primary btn-banner fs-4" data-bs-toggle="modal" data-bs-target="#loginModal">let's get started</button>
    </div>
</div>
</header>
<!--
</br>
<div class="b-example-divider"></div>
<div class="b-example-divider"></div>
-->

<main>
<section class = "steps py-8">
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
                <select class="form-select" aria-label="Select a language">
                    <option selected>Select a language</option>
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="fr">French</option>
                    <!-- Add more language options as needed -->
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-select" aria-label="Select a language">
                    <option selected>Select a language</option>
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
</div>
</section>

<section class = "templates py-8">

<div class="b-example-divider"></div>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="./images/Bhasha-Kosh Logo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
      </div>
    </div>
  </div>
</div>

</section>
    </main>

     <!-- Services Section -->
     <section class="container mt-5 h-100">
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service-card">
                    <img src="./images/Bhasha-Kosh Logo.png" class="img-fluid" alt="Service 1">
                    <div class="overlay-text">
                        <h3>Service 1</h3>
                        <p>Description of Service 1 goes here.</p>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="service-card">
                    <img src="./images/Bhasha-Kosh Logo.png" class="img-fluid" alt="Service 2">
                    <div class="overlay-text">
                        <h3>Service 2</h3>
                        <p>Description of Service 2 goes here.</p>
                    </div>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="service-card">
                    <img src="service3.jpg" class="img-fluid" alt="Service 3">
                    <div class="overlay-text">
                        <h3>Service 3</h3>
                        <p>Description of Service 3 goes here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="shadow text-center text-black  border-top  border-5 border-color:#adb5bd">
        <div class = "container-fluid copyright-text pt-2 pb-2"> 
            <p class = "text-center fw-3">&copy; <?php echo date("Y"); ?> CV Creator. All rights reserved</p>
        </div>
    </footer>





    <!-- Add Bootstrap JS (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript Function to Copy Text to Clipboard -->
    <script>
        function copyToClipboard(elementId) {
            /* Get the text area element by its ID */
            var textArea = document.getElementById(elementId);

            /* Select the text in the text area */
            textArea.select();

            /* Copy the selected text to the clipboard */
            document.execCommand('copy');
        }

        /* JavaScript function for translating text (You can implement this as needed) */
        function translateText() {
            /* Implement your translation logic here */
            alert('Translation functionality will be implemented here.');
        }
    </script>