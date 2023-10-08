<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Fixed top navbar example · Bootstrap v5.3</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

  </head>
  <body>

     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <!-- Logo on the left -->
        <a class="navbar-brand fw-bold fs-2" href="index.php">
            <span class="navbar-brand-text logo"><img src="./images/Bhasha-Kosh Logo (1).png" style="width: 200px; height: auto;" /></span>
        </a>

        <!-- Create a spacer to push Login and Register buttons to the right -->
        <div class="d-flex flex-row ml-auto">
            <!-- Login button -->
            <a href="login.php" class="btn btn-outline-light me-2">Login</a>
            <!-- Register button -->
            <a class="btn btn-primary text-white" href="#">Register</a>
        </div>
    </div>
</nav>


<main class="container">

<div class="container h-100 d-flex align-items-center justify-content-center">
    <div class = "row text-center justify-content-center">
        <h1 class = "text-blue fw-6 lh-17 display-5">Translate to your language in just a <span class = "text-lowercase text-primary">second!</span></h1>
        <p class = "text-grey fs-4 mt-3 mb-5">Easy to use. Time-saver. Professional.</p>
        <!-- <button type="button" class="btn btn-primary my-2 btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal">Get started</button> -->
        <a href="login.php"><button class = "btn btn-lg text-capitalize btn-primary btn-banner fs-4" data-bs-toggle="modal" data-bs-target="#loginModal">let's get started</button></a>
    </div>
</div>

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
                    <textarea id="translationText" class="form-control mb-3" rows="7" readonly style="background-color:white;"></textarea>
                    <button class="btn btn-primary btn-sm" onclick="copyToClipboard('translationText')">Copy</button>
                </div>
            </div>
        </div>

        <!-- Language Selection and Translate Button -->
        <div class="row mt-3">
            <div class="col-md-6">
                <select class="form-select" aria-label="Select source language" id="sourceLanguage">
                    <option>Select source language</option>
                    <option value="en" selected>English</option>
                    <option value="ne">Nepali</option>
                    <option value="mn">Mangolian</option>
                    <!-- Add more language options as needed -->
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-select" aria-label="Select target language" id="targetLanguage">
                    <option selected>Select target language</option>
                    <option value="mai">Maithali</option>
                    <option value="ne">Nepali</option>
                    <option value="en">English</option>
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


    <section class = "templates py-8">

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="./images/Bhasha-Kosh Logo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">About us</h1>
      <p class="lead">“ Bhasha-kosh" is an innovative web application aimed at promoting and preserving indigenous languages</p>
      <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
      </div> -->
    </div>
  </div>
</div>

</section>
    

<!-- Services -->
  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Services</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Translation</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="./images/first.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">News / Blogs</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="./images/first.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Dictionary</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="./images/first.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- services end-->

<!-- FAQ -->
<div class="accordion w-100" id="basicAccordion">
    <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3>
    <p class="text-center mb-5">
      Find the answers for the most frequently asked questions below
    </p>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#basicAccordionCollapseOne" aria-expanded="false" aria-controls="collapseOne">
          Do I need to pay to access news on news portals?
        </button>
      </h2>
      <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
        <div class="accordion-body">No it's 
          <strong>free </strong> to access news.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Can I comment or engage in discussions on news portal websites?
        </button>
      </h2>
      <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
        <div class="accordion-body">
        Commenting policies and community guidelines vary among portals. Users are typically expected to adhere to respectful and constructive communication standards.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#basicAccordionCollapseThree" aria-expanded="false" aria-controls="collapseThree">
          How can I submit news tips or articles to a news portal?
        </button>
      </h2>
      <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
        <div class="accordion-body">
       We have a "Contact Us" or "Submit News" section on their websites where you can find information on how to submit news tips or articles. 
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ end -->

</main>

<!-- Footer -->
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Services</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
  </footer>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Function to Copy Text to Clipboard and Translate Text -->
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
<script src="./js/translate.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

    </body>
</html>
