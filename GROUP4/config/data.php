<?php
SESSION_START(); // Use lowercase 'session_start'

// Retrieve form input
$username = $_POST['username'];
$password = $_POST['password'];

// Define allowed usernames and passwords
$allowedUsernames = array("Mark", "Nicole", "Francis", "Jessa");
$allowedPassword = "12345";

// Check if the username and password are valid
if (in_array($username, $allowedUsernames) && $password === $allowedPassword) {
    $_SESSION['status'] = TRUE;
    $_SESSION['username'] = $username;
    header("Location: ../admin/admin.php"); // Redirect to the admin page
    exit(); // Ensure no further code execution after redirection
} else if ($username === "User" && $password === $allowedPassword) {
    $_SESSION['status'] = TRUE;
    $_SESSION['username'] = $username;
    header("Location: ../user/user.php"); // Redirect to the user page
    exit(); // Ensure no further code execution after redirection
} else {
    $_SESSION['error'] = "INVALID USERNAME";
    header("Location: ../index.php"); // Redirect to the index page
    exit(); // Ensure no further code execution after redirection
}
?>
