<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">

  <!-- Wong Zi Jiang -->
  <link rel="stylesheet" href="css/AdminHome.css" />
  <link rel="stylesheet" href="css/admin.css" />
  <title>Admin Home</title>

</head>

<body>
  <nav class="navbar bg-light justify-content-between">
    <a class="navbar-brand font-weight-bold">
      <i class="fa fa-cogs mr-2"></i>V-Continental Admin</a>
    <a href="AdminLogin.php"><i class="fa fa-lg fa-sign-out-alt"></i></a>
  </nav>
  <div class="container-fluid">
    <div class="row summary-body d-flex align-items-center justify-content-center text-center">
      <div class="card col-md-2 m-3 rounded p-3">
        <div class="card-body">
          <i class="fas fa-book-open fa-10x w-100"></i>
          <a href="Admin-OrderSummary.php" class="btn btn-dark rounded-pill mt-3">
            <h5>Order Summary</h5>
          </a>
        </div>
      </div>
      <div class="card bg-admin-content col-md-2 m-3 rounded p-3">
        <div class="card-body">
          <i class="fas fa-chair fa-10x w-100 p-2"></i>
          <a href="Admin-ReservedList.php" class="btn btn-dark rounded-pill mt-3">
            <h5>Table Reservation</h5>
          </a>
        </div>
      </div>
      <div class="card bg-admin-content col-md-2 m-3 rounded p-3">
        <div class="card-body">
          <i class="fas fa-gift fa-10x w-100 p-2"></i>
          <a href="Admin-Voucher.php" class="btn btn-dark rounded-pill mt-3">
            <h5>Voucher Promo</h5>
          </a>
        </div>
      </div>
      <div class="card bg-admin-content col-md-2 m-3 rounded p-3">
        <div class="card-body">
          <i class="fas fa-utensils fa-10x w-100"></i>
          <a href="Admin-MenuList.php" class="btn btn-dark rounded-pill mt-3">
            <h5>Menu List</h5>
          </a>
        </div>
      </div>
      <div class="card bg-admin-content col-md-2 m-3 rounded p-3">
        <div class="card-body">
          <i class="fas fa-user fa-10x w-100"></i>
          <a href="Admin-UserList.php" class="btn btn-dark rounded-pill mt-3">
            <h5>User List</h5>
          </a>
        </div>
      </div>
    </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>