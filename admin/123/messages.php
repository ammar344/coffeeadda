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

// show order

$showmessages = "SELECT * FROM contact_us ORDER BY dated DESC";
$showQuery = mysqli_query($conn, $showmessages)
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Messages</span></h4>


              <!-- Bootstrap Table with Header - Dark -->
              <div class="card">
                <h5 class="card-header">Costumer Messages</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-height">
                    <thead class="table-head">
                      <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Phone no.</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($showQuery)){
                      $id = $row['id'];
                      $name = $row['name'];
                      $phoneNum = $row['phone_no'];
                      $email = $row['email'];
                      $messages = $row['message'];
                                     
                    ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $phoneNum; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $messages; ?></td>

                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="server.php?deleteMesId=<?php echo $id ?>"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    <?php $i++; } ?>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Table with Header Dark -->

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

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
