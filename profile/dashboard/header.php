<?php
include("../../database.php");
?>
<?php 
include("../session.php");
$mail=$_SESSION["email"];
$name=$_SESSION["name"];
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
    </head>
    <body class="sb-nav-fixed">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap Typeahead CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.css" rel="stylesheet">


        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">            
                <span class="navbar-brand-text logo"><img src="../../images/Bhasha-Kosh Logo (1).png" style="width: 180px; height: auto;" /></span>
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
           
    <div class="col-md-2 ms-auto me-0 me-md-3 my-2 my-md-0">
    <select class="form-select" aria-label="Select source language" id="sourceLanguage" onchange="navigateToPage()">
        <option>Select source language</option>
        <option value="indexs">English</option>
        <option value="index">Maithali</option>
        <option value="mn">Nepali</option>
        <option value="newa">Nepal Bhasa (Newar)</option>
        <option value="magar">Magar</option>
        <option value="limbu">Limbu</option>
        <option value="tmg">Tamang</option>
        <option value="rai">Rai(Kiranti)</option>
        <option value="sherapa">Sherpa</option>
        <!-- Add more language options as needed -->
    </select>
</div>

<script>
    function navigateToPage() {
        const selectElement = document.getElementById("sourceLanguage");
        const selectedValue = selectElement.value;

        // Check if a valid option (not "Select source language") is selected
        if (selectedValue !== "") {
            // Construct the URL for the next page based on the selected value
            const nextPageUrl = selectedValue + ".php"; // Assuming the page name matches the value

            // Navigate to the selected page
            window.location.href = nextPageUrl;
        }
    }
</script>

           
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
              
                <div class="input-group">
                <!-- data-bs-toggle="modal" data-bs-target="#loginModal" -->
                 <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for blogs" aria-describedby="btnNavbarSearch" id="searchInput" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> 
                </div>
            </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>



<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    
  </div>
</div>





            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" -->
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                News
                            </a>
                            <a class="nav-link" href="dictionary.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dictionery
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Blogs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="read-blog.php">Read Blogs</a>
                                    <a class="nav-link" href="write-blog.php">Write Blogs</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Work with us
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="contact.php" >
                                        Fill Form
                                    </a>
                                </nav>
                            </div>
                    </div>
                    <div class="sb-sidenav-footer fixed-bottom">
                        <div class="small">Logged in as:</div>
                        <?php echo $name;?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
