<?php

// Start the session
session_start();

@include 'login/config.php';

$loginErrorText = "";
if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $search_query = mysqli_query($conn, "SELECT * FROM `users` where email = '$email' and psw = '$password'");
    $search_number = mysqli_num_rows($search_query);
    if ($search_number == 0) {
        $loginErrorText = "Email or Password are incorrect. Please try again!";
        echo "Email or Password are incorrect. Please try again!";
    } else {
        $_SESSION['loggedin'] = true;

        $fetch_user = mysqli_fetch_assoc($search_query);
        
        $userRole = $fetch_user['role'];
        $_SESSION['userRole'] = $userRole;
        if ($userRole == 'user') {
            header('Location:http://localhost/php/SHE/SHE.php');
        } else {
            header('Location: ');
        }
    }
}
// Code pour l'inscription
if ((isset($_POST['signup-username'])) && (isset($_POST['signup-email'])) && (isset($_POST['signup-password']))) {
  $signup_username = $_POST['signup-username'];
  $signup_email = $_POST['signup-email'];
  $signup_password = $_POST['signup-password'];

  // Requête SQL pour insérer les données d'inscription dans la base de données
  $insert_query = "INSERT INTO `users` (username, email, psw, role) VALUES ('$signup_username', '$signup_email', '$signup_password', 'user')";
  if (mysqli_query($conn, $insert_query)) {
      echo "Record added successfully";
  } else {
      echo "Error adding record: " . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login/style.css" />
    <link rel="shortcut icon" type="x-icon" href="login/img/IMG_8446.PNG">
    <title>She</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="email" name="email" placeholder="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Follow Us</p>
            <div class="social-media">
              <a href="https://www.facebook.com/amal.flexy?locale=fr_FR" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/sky.high.eventss/" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </form>
          <form action="" class="sign-up-form"  method="post"> 
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="signup-username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="signup-email" placeholder="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="signup-password" placeholder="Password" required />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Follow Us</p>
            <div class="social-media">
              <a href="https://www.facebook.com/amal.flexy?locale=fr_FR" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/sky.high.eventss/" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            The customer himself, the customer will be able to pursue the adipiscing of the company. You must, out of reason. Something!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="login/img/IMG_8446.PNG" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            The customer should be able to follow the customer's customer service. Our hard work to soften.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="login/img/IMG_8446.PNG" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login/app.js"></script>
  </body>
</html>