<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        /* Custom CSS for the navbar 
        .navbar {
            background-color: white !important; 
        }
        */
        .navbar-nav {
            flex-direction: row; /* Align the nav items horizontally */
        }
        .navbar-nav .nav-item {
            margin-right: 15px; /* Add spacing between nav items */
        }
    </style>
    <title>Bhasa-Kosh</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container">
                <a class="navbar-brand fw-bold fs-2" href="index.php">
                    <span class="navbar-brand-text logo"><img src="./images/Bhasha-Kosh Logo.png" style="width: 200px; height: auto;" /></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="login.php" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   