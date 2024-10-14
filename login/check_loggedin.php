<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page
    header('Location: http://localhost/php/Miini%20projet/login/Sign_in.php#create');
    exit;
}
?>