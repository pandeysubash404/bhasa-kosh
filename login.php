<?php
require("database.php");

if (isset($_POST["submitlogin"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    // Check if email and password are empty
    if (empty($email) || empty($password)) {
        $login_error = "Please enter your email and password";
    } else {
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $login_error = "Please enter a valid email address";
        } else {
            // Use prepared statement to fetch the user
            $query = "SELECT * FROM users WHERE email=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Verify the password
                if ($password == $row["password"]) {
                    // Login successful
                    session_start();
                    $_SESSION["email"] = $email;
                    $_SESSION["name"] = $row["name"];
                    $_SESSION["logged_in"] = true;
                    setcookie("last_activity", time(), time() + (60 * 60 * 24 * 30));
                    header("Location:profile/dashboard/indexs.php");
                    exit;
                } else {
                    $login_error = "Invalid email or password inside";
                }
            } else {
                $login_error = "Invalid email or password outside";
            }
        }
    }
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel = "stylesheet" href = "css/main.css">
    <title>Bhasakosh</title>
  </head>
  <body>
  <nav class = "navbar navbar-expand-lg navbar-light x  ">
            <div class="container">
            <a class="navbar-brand fw-bold fs-2" href="index.php">
    <span class="navbar-brand-text logo"><img src="./images/Bhasha-Kosh Logo.png" style="width: 200px; height: auto;" /></span>
</a>
            </div>
        </nav>


<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./images/login.svg"
          class="img-fluid" alt="Sample image">
      </div>
      
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <div><h2>Sign in</h2></div>

      <span class="text-danger"> <?php if (!empty($login_error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $login_error; ?>
        </div>
        <?php } ?></span>

      <form action="login.php" method="post" name="loginForm" onsubmit="return validateloginForm()">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="loginEmail">Email address</label>
        <input type="text" id="loginEmail" class="form-control form-control-lg"
            placeholder="Enter a valid email address" name="email" />
        <span id="loginEmailError" class="text-danger"></span>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-3">
        <label class="form-label" for="loginPassword">Password</label>
        <input type="password" id="loginPassword" class="form-control form-control-lg"
            placeholder="Enter password" name="password" />
        <span id="loginPasswordError" class="text-danger"></span>
    </div>

    <div class="text-center text-lg-start mt-4 pt-2">
        <button type="submit" class="btn btn-primary btn-lg"
            style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submitlogin">Login</button>

        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
    </div>
</form>


      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

   
  </div>
</section>

<script>
    function validateloginForm() {
  var email = document.forms["loginForm"]["loginEmail"].value;
  var password = document.forms["loginForm"]["loginPassword"].value;

  if (email == "") {
    document.getElementById("loginEmailError").innerHTML = "Please enter your email";
    return false;
  }else{
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
      document.getElementById("loginEmailError").innerHTML = "Please enter a valid email address.";
      return false;
    } 
  }

  if (password == "") {
    document.getElementById("loginPasswordError").innerHTML = "Please enter your password";
    return false;
  }
}
</script>
</body>
</html>