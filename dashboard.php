<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inventory Management System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body>
  <?php
      if($_SESSION["username"] === ""){
        echo $_SESSION['username'];
        echo "login";
        header("Location: index.php ");
      }
  ?>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
        <img src="images/logo.svg" alt="logo" width="130" height="30" alt="Logo" loading="lazy">
    </a>
        
    <button class="btn btn-outline logout-btn" onclick="location.href='user-logout.php'">Logout</button>
  </div>

  <div class="mt-4">
    <div class="text-center p-3">
        <h2 class="theme-color">Dashboard</h2>
    </div>
  </div>

  <div class="container">
    <div class="row my-4">

      <div class="col-sm">
        <button class="btn btn-block action-btn p-3" onclick="location.href='add-product.php'">
          <i class="far fa-plus-square pr-3"></i> Add Product
        </button>
      </div>

      <div class="col-sm">
        <button class="btn btn-block action-btn p-3" onclick="location.href='search-products.php'">
          <i class="fas fa-search pr-3"></i> Search
        </button>
      </div>

      <div class="col-sm">
        <button class="btn btn-block action-btn p-3" onclick="location.href='view-available-products.php'">
          <i class="fas fa-boxes pr-3"></i> View Available Products
        </button>
      </div>

    </div>

    <div class="row my-4">
      <div class="col-sm">
        <button class="btn btn-block action-btn p-3" onclick="location.href='sell-product.php'">
          <i class="far fa-minus-square pr-3"></i> Sell Product
        </button>
      </div>

      <div class="col-sm">
        <button class="btn btn-block action-btn p-3" onclick="location.href='view-sold-products.php'">
          <i class="fas fa-boxes pr-3"></i> View Sold Products
        </button>
      </div>

      <div class="col-sm">
        <button class="btn btn-block action-btn p-3" onclick="location.href='add-admin.php'">
          <i class="fas fa-user-shield pr-3"></i> Admin
        </button>
      </div>

    </div>
  </div>
      
</body>
</html>