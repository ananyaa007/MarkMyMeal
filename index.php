<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MarkMyMeal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a class="logo d-flex align-items-center">
        <img src="assets/img/logo.png">
        <span class="d-none d-lg-block">MarkMyMeal</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/1.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username']; ?></h6>
              <span>Computer Science & Engg.</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
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

          </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="error404.php">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="feedback.php">
          <i class="bi bi-file-earmark"></i>
          <span>Feedback</span>
        </a>
      </li><!-- End Feedback Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">M.A.N.E.T Mess</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h5>Students Visiting</h5>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Raj Mess</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h5>Students Visiting</h5>
                    </div>
                    <div class="ps-3">
                      <h6>205</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Sangeet Mess</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h5>Students Visiting</h5>
                    </div>
                    <div class="ps-3">
                      <h6>160</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div>

            <!-- Check In -->

            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title"><span>Dashboard / </span>Select Mess For Today</h5>

                  <div class="form-center">
                    <form class="row g-3">

                      <div class="col-12">
                        <label class="col-sm-2 col-form-label">Select Mess</label>
                        <div class="col-sm-12">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select mess</option>
                            <option value="1">M.A.N.E.T Mess</option>
                            <option value="2">Raj Mess</option>
                            <option value="3">Sangeet Mess</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-12">
                        <label class="col-sm-2 col-form-label">Select Time</label>
                        <div class="col-sm-12">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this to select time</option>
                            <option value="1">Breakfast</option>
                            <option value="2">Lunch</option>
                            <option value="3">Dinner</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Check In</button>
                      </div>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End Check In -->

          <!-- Mark Leave-->

          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title"><span>Dashboard / </span>Mark Leave</h5>

                <div class="form-center">
                  <form class="row g-3">

                    <div class="col-12">
                      <label class="col-sm-2 col-form-label">Select Time</label>
                      <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Open this to select time</option>
                          <option value="1">Breakfast</option>
                          <option value="2">Lunch</option>
                          <option value="3">Dinner</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="col-sm-8 col-form-label">Select Date From?</label>
                      <div class="col-sm-12">
                        <input type="date" class="form-control">
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="col-sm-8 col-form-label">Select Date To?</label>
                      <div class="col-sm-12">
                        <input type="date" class="form-control">
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>

                  </form>
                </div>
              </div>

            </div>
          </div>
        </div><!--End Mark Leave-->
        </div>
      </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>MarkMyMeal</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>