<?php 
include_once './connection.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $showUser = "SELECT * FROM admin_users WHERE id = '" . $_SESSION['user_id'] . "'";
  $showUserQuery = mysqli_query($conn, $showUser);
} else {
  // If no session, redirect to the login page
  header('Location: index.php');
  exit();
}
$user = mysqli_fetch_array($showUserQuery);

// today reservation
$showTodayRes = "SELECT COUNT(*) AS todayRes from reservations WHERE DATE(reserveDate) = CURDATE()";
$showTodayResQuery = mysqli_query($conn, $showTodayRes);
if($showTodayResQuery){
  $row = mysqli_fetch_array($showTodayResQuery);
  $todayRes = $row['todayRes'];
}else{
  $todayRes = 0;
}

// total reservation
$showTotalRes = "SELECT COUNT(*) AS totalRes from reservations";
$showTotalResQuery = mysqli_query($conn, $showTotalRes);
if($showTotalResQuery){
  $row = mysqli_fetch_array($showTotalResQuery);
  $totalRes = $row['totalRes'];
}else{
  $totalRes = 0;
}

// pending reservation
$showPendingRes = "SELECT COUNT(*) AS totalRes from reservations WHERE status = 'Pending'";
$showPendingResQuery = mysqli_query($conn, $showPendingRes);
if($showPendingResQuery){
  $row = mysqli_fetch_array($showPendingResQuery);
  $pendingRes = $row['totalRes'];
}else{
  $pendingRes = 0;
}

// completed reservation
$showCompRes = "SELECT COUNT(*) AS totalRes from reservations WHERE status = 'Completed'";
$showCompResQuery = mysqli_query($conn, $showCompRes);
if($showCompResQuery){
  $row = mysqli_fetch_array($showCompResQuery);
  $completedRes = $row['totalRes'];
}else{
  $completedRes = 0;
}

?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Admin | Coffee Adda</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
         <?php include_once ('./includes/sidebar.php'); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
        <?php include_once ('./includes/header.php'); ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome <?php echo $user['name']; ?>! 🎉</h5>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="./assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="order-1">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="./assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="./reservations.php">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Today's Reservations</span>
                          <h3 class="card-title mb-2"><?php echo $todayRes; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="./assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="./reservations.php">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total Reservations</span>
                          <h3 class="card-title mb-2"><?php echo $totalRes; ?></h3>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="order-1">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="./assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="./reservations.php">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Completed Reservations</span>
                          <h3 class="card-title mb-2"><?php echo $completedRes; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="./assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="./reservations.php">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Pending Reservations</span>
                          <h3 class="card-title mb-2"><?php echo $pendingRes; ?></h3>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
