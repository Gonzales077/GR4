<?php
SESSION_START();

// Check if 'username' is not set in the session
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: http://localhost/GROUP4/index.php");
    exit(); // Ensure no further code is executed after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

</form>
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: transparent; box-shadow: none;">
  <!-- Navbar content here -->



  <div class="container-fluid">
    
  <a class="navbar-brand d-flex align-items-center" href="javascript:void(0)">
  <img src="logo1.png" alt="Logo" style="height: 50px; margin-right: 10px;">    
</a>

    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
       
      </ul>
      
      
      <form action="../config/logout.php" method="POST" class="d-flex align-items-center">
        <input type="submit" class="btn btn-danger" value="LOGOUT">
      </form>
    </div>
  </div>
</nav>


<div class="container-fluid mt-3">
  <h1>Admin Dashboard</h1>
  <p>Welcome to the Admin Dashboard! Here you can manage all aspects of your system with ease and efficiency.</p>
</div>
</body>
</html>