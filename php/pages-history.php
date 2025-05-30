<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/assets2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/assets2/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/assets2/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/assets2/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/assets2/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/assets2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/assets2/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/assets2/assets/css/style.css" rel="stylesheet">
</head>


<body>
<?php
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
  }
    ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="pages-index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/img/logo.png" alt="">
        <span class="d-none d-lg-block">Road Side Rescue &emsp;Hub</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo htmlspecialchars($name); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo htmlspecialchars($name); ?></h6>
              <span>User</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-contact.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <span>Dashboard</span></li>
        <li><a class="nav-link collapsed " href="pages-index.php">
          <i class="bi bi-truck"></i>
          <span>Services</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-history.php">
          <i class="bi bi-question-circle"></i>
          <span>History</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section profile">
      <div class="row">
        

        <div class="col-xl-8">

          <div class="card" style="width: 60rem;">
            <div class="card-body pt-3 ">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pending_list">Fuel Booked</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#approved_list">Mechanic Booked</button>
                </li>
                
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="pending_list">
                  
                  <h5 class="card-title">Fuel Booked</h5>

                  <div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Slno</th>
<th scope="col">Date & Time</th>
<th scope="col">Name</th>
<th scope="col">Fuel Type</th>
<th scope="col">Quantity</th>
<th scope="col">Amount</th>
<th scope="col">Service Provider id</th>
</tr>
</thead>
<tbody>
<?php
$sname="localhost";
 $uid="root";
 $pwd="";
 $db="rrh";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 if($con){
 $q="select * from fuelbook";
 $result=$con->query($q);
 $x=0;
 while ($row = $result->fetch_assoc()) {
    $x=$x+1;
    echo "<tr><th scope='row'>$x</th><td>{$row['time']}</td><td>{$row['name']}</td><td>{$row['fuel']}</td><td>{$row['quantity']}</td><td>{$row['amount']}</td><td>{$row['license']}</td></tr> ";
}}
?>
</tbody>
</table>
</div></div>

<div class="tab-content pt-2">

                <div class="tab-pane fade profile-overview" id="approved_list">
<h5 class="card-title">Mechanic Booked</h5>
 <div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Slno</th>
<th scope="col">Date & Time</th>
<th scope="col">Name</th>
<th scope="col">Type of vehicle</th>
<th scope="col">Issue</th>
<th scope="col">Service Provider id</th>
</tr>
</thead>
<tbody>
<?php
 $q="select * from mechanicbook";
 $result=$con->query($q);
 $x=0;
 while ($row = $result->fetch_assoc()) {
    $x=$x+1;
    echo "<tr><th scope='row'>$x</th><td>{$row['time']}</td><td>{$row['name']}</td><td>{$row['type']}</td><td>{$row['issue']}</td><td>{$row['license']}</td></tr> ";
}
?>
</tbody>
</table>
</div>             

                </div>

                
        </div>
      </div>
    </section>
  </main>


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Rahul VR</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https">Rahul & Joel</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/assets2/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/assets2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/assets2/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/assets2/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/assets2/assets/vendor/quill/quill.js"></script>
  <script src="../assets/assets2/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/assets2/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/assets2/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/assets2/assets/js/main.js"></script>

</body>

</html>