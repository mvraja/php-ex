<?php
session_start();
require('config/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jaam - DASHBOARD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="icon">
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/vendor/jquery/jquery.js" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">






  <!-- Custom fonts for this template-->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="../img/logo.png" rel="icon">
  <!-- Custom fonts for this template-->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="style3.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>

  <style>
    .header {
      color: grey;
      transition: all 0.5s;
      z-index: 997;
      height: 60px;
      box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
      background-color: #FFFFF7;

      padding-left: 20px;
      /* Toggle Sidebar Button */
      /* Search Bar */
    }
  </style>
</head>

<body>

  <div class="fixed-top">
    <div class="container-fluid  navbar-cg p-2" style="margin-bottom:-15px; background-image: url('./assets/img/240_F_303562524_QfNWIptUFfYdGbR0AdcA0wJ0pZuJfW2w.jpg');  
  background-color: #4D004C;
  height: 500px; 
  background-position: bottom; 
  background-repeat: no-repeat;
  background-size: cover; color:white; height:100px; position:sticky;">
      <center>
        <h4 style="margin-top:15px;">Jaam Communications LLC</h4>
      </center>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed d-flex align-items-center" style="position: sticky;">


      <div class="d-flex align-items-center justify-content-between">
        <a href="./dashboard.php" class="logo d-flex align-items-center">
          <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="100" height="100">

        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->


      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <?php
          if ($_SESSION['role'] == 'S-Employee' || $_SESSION['role'] == 'Employee') {
            $sql = "SELECT pay_slip.generated_at FROM pay_slip WHERE generated_at > now() - interval '10' day;";
            $result = mysqli_query($connect, $sql);
            $n = $result->num_rows;

            if ($n != 0) {
              $row = mysqli_fetch_assoc($result);
              echo '
               
                    <!-- Button trigger modal -->
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                  <img src="./assets/img/hi.png" height=30 width=30>
                  </button>';
            }
          }

          ?>



          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2"><?php
                                                                    echo $_SESSION['uname'];
                                                                    ?>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php
                    echo $_SESSION['uname'];
                    ?></h6>
                <span><?php echo $_SESSION['role']; ?></span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="./login/logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->
  </div>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="margin-top: 85px; ">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="./dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php
      if ($_SESSION['role'] == 'Admin') {
      ?>




        <li class="nav-item">
          <a class="nav-link collapsed" href="addUser.php">
            <i class="bi bi-person-fill-add"></i>
            <span>Add user</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="updateSalary.php">
            <i class="bi bi-upload"></i>
            <span>Update Salary</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="paySlip.php">
            <i class="bi bi-cash"></i>
            <span>Payslip</span></a>
        </li>


        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-receipt"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="projectReport.php" class="active">
                <i class="bi bi-circle"></i><span>Project Report</span>
              </a>
              <a href="attendanceReport.php">
                <i class="bi bi-circle"></i><span>Attendance Report</span>
              </a>

              <a href="salaryReport.php">
                <i class="bi bi-circle"></i><span>Salary Report</span>
              </a>

            </li>
          </ul>
        </li>


      <?php
      } else if ($_SESSION['role'] == 'S-Employee') {

      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="addProfile.php">
            <i class="bi bi-person-lines-fill"></i>
            <span>Profile info</span></a>
        </li>
        <li class="nav-item">
      <a class="nav-link " href="myProject.php">
        <i class="bi bi-display"></i>
        <span>Projects</span></a>
    </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="getPayslip.php">
            <i class="bi bi-cash"></i>
            <span>Payslip</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="timeSheet.php">
            <i class="bi bi-clock-history"></i>
            <span>Timesheet</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="requestLeave.php">
                <i class="bi bi-circle"></i><span>Request leave</span>
              </a>
            </li>
            <li>
              <a href="manageLeave.php">
                <i class="bi bi-circle"></i><span>My Requests</span>
              </a>
            </li>


          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#subjects-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-display"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="projectAllocation.php">
                <i class="bi bi-circle"></i><span>Project Allocation</span>
              </a>
            </li>
            <li>
              <a href="manageAllocation.php">
                <i class="bi bi-circle"></i><span>Manage Allocation</span>
              </a>
            </li>
          </ul>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#approvals-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-check2-square"></i><span>Approvals</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="approvals-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="leaveRequest.php">
                <i class="bi bi-circle"></i><span>Employee requests</span>
              </a>
            </li>
            <li>
              <a href="approveTimesheet.php">
                <i class="bi bi-circle"></i> <span>Timesheet</span></a>

            </li>
          </ul>
        <?php
      }
      if ($_SESSION['role'] == 'Employee') {
        ?>
          <!-- End Forms Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="addProfile.php">
            <i class="bi bi-person-lines-fill"></i>
            <span>Profile info</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="myProject.php">
            <i class="bi bi-display"></i>
            <span>Projects</span></a>
        </li>


        <li class="nav-item">
          <a class="nav-link collapsed" href="getPayslip.php">
            <i class="bi bi-cash"></i>
            <span>Payslip</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="timeSheet.php">
            <i class="bi bi-clock-history"></i>
            <span>Timesheet</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="requestLeave.php">
                <i class="bi bi-circle"></i><span>Request leave</span>
              </a>
            </li>

            <li>
              <a href="manageLeave.php">
                <i class="bi bi-circle"></i><span>My Requests</span>
              </a>
            </li>
          </ul>
        </li>

        <!-- End Tables Nav -->
    </ul>
  <?php } ?>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <br><br><br><br>
    <div class="pagetitle">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3">Dashboard</h1>
      </div>


      <!-- Content Row -->
      <div class="row">
        <!-- Area Chart -->
        <div class="col-12">

          <?php
          require('config/conn.php');
          if ($_SESSION['role'] == 'S-Employee' || $_SESSION['role'] == 'Employee') {
          ?>

            <script>
              function myFunction() {
                var x = document.getElementById("viewoldcr");
                if (x.style.display === "none") {
                  x.style.display = "block";
                } else {
                  x.style.display = "none";
                }
              }
            </script>
           

            <div class="container-fluid">


              <div class="row justify-content-center">



                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Circular</h6>
                </div>
                <!-- Card Body -->
                <div class="container p-4" style="overflow:auto">
                  <div class="card-body" style="width:1000px; ">
                    <?php
                    $d = "SELECT DAY(CURDATE()) as day";
                    $result = mysqli_query($connect, $d);
                    if ($result !== false) {
                      $row = mysqli_fetch_assoc($result);
                      $day = $row['day'];
                    }
                    $m = "SELECT MONTH(CURDATE()) as month";
                    $result1 = mysqli_query($connect, $m);
                    if ($result1 !== false) {
                      $row1 = mysqli_fetch_assoc($result1);
                      $mon = $row1['month'];
                    }

                    $sql = "SELECT * FROM employee_details WHERE day(dob)='$day' AND month(dob)='$mon'";
                    $result2 = mysqli_query($connect, $sql);
                    $n = $result2->num_rows;

                    if ($n != 0) {
                      while ($row2 = $result2->fetch_assoc()) {

                        echo ' <center><div class="card" style="width:500px; height:300px;"><br><br>
                  <img src="https://cdn.pixabay.com/photo/2020/10/06/21/54/cake-5633461__480.png" alt="birthday" class="birthday" >
                  <div class="text">
                    <h1>Happy Birthday !</h1><br>
                    <p>Have a great future ' . $row2['name'] . ' !</p>
                    
                    <div class="credit">Made with <span style="color:tomato">❤</span> by  Jaam Communications LLC</div>
                  </div>
                  <div class="space"></div>
                </div></center>';
                      }
                    }
                    ?>

                    <!-- Modal -->
                    <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">

                          <div class="modal-body">
                            <span id="boot-icon" class="bi bi-bell-fill" style="font-size: 1.5rem; color: rgb(255, 210, 48);"></span>&nbsp;&nbsp;&nbsp;<b><span style="color: #333d97;">Payslip generated!</b></span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>

                          </div>
                        </div>
                      </div>
                    </div>

                    <?php

                    $sql = "SELECT date1, image, text FROM  circulars WHERE (date1 = current_date OR date1 = DATE(NOW() - INTERVAL 1 DAY))";
                    $sql1 = "SELECT * FROM circulars WHERE (date1 != current_date AND date1 != DATE(NOW() - INTERVAL 1 DAY))";
                    $result = mysqli_query($connect, $sql);
                    $result1 = mysqli_query($connect, $sql1);
                    $n = $result->num_rows;

                    if ($n != 0) {
                      while ($row = $result->fetch_assoc()) {
                        $my_date = $row['date1'];
                        $date = DATE("d/m/Y", strtotime($my_date));
                        echo "<span style='float:left'><b> Release date:</b> " . $date . "</span>";
                        echo "<center><img src='circulars/" . $row['image'] . "' width='300' height='300'><br><br>";
                        echo "<p id ='a'>" . $row['text'] . "</p></center><br><br><br><br><br>";
                      } ?>





                    <?php }


                    if (1 == 1) {
                      $row3 = mysqli_fetch_assoc($result1);
                      echo "<div id='viewoldcr' style='display: none;'>
                <table class='table table-hover' id='dataTable' style='width:1300px;'>
                                  <thead class='thead-light'><tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Attachment</th>
                                  </tr>                             



                                </th></thead>";
                    }


                    while ($row1 = mysqli_fetch_array($result1)) {
                      $my_date1 = $row1['date1'];
                      $date1 = DATE("d/m/Y", strtotime($my_date1));


                      echo "<tbody><tr>";
                      echo "<td>" . $date1 . "</td>";
                      echo "<td>" . $row1['text'] . "</td>";
                      echo "<td> '<img src='circulars/" . $row1['image'] . "' width='300' height='300'><br><br>' </td>";
                      echo "</tr></tbody>";
                    }
                    echo "</table></div>";
                  } else if ($_SESSION['role'] == 'Admin') {
                    ?>



                    <!-- <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pending College Fee</h5>
        <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <span style="font-size:2rem;"> <i class="bi bi-currency-rupee text-warning"></i>
                    </div>
                    <div class="ps-3">
                      <h3><?php
                          require('config/conn.php');
                          $C = "SELECT SUM(balance) FROM payment ";
                          $res = mysqli_query($connect, $C);
                          while ($row = mysqli_fetch_assoc($res)) {
                            echo "" . $row['SUM(balance)'] . "";
                          }
                          ?>
                      
                      
                      </h3>
                    </div></div> -->

                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Pending Transport Fee</h5>
        <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <span style=" font-size:2rem;
">  <i class="bi bi-currency-rupee text-warning"></i></span>
                    </div>
                    <div class="ps-3">
                      <h3><?php
                          require('config/conn.php');
                          $T = "SELECT SUM(balance) FROM transport_payment ";
                          $res1 = mysqli_query($connect, $T);
                          while ($row = mysqli_fetch_assoc($res1)) {
                            echo "" . $row['SUM(balance)'] . "";
                          }
                          ?>
                      
                      
                      </h3>
                    </div></div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Students strength</h5>
     
        <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <span style=" font-size:2rem;
">     <i class="bi bi-people text-primary"></i></span>
                    </div>
                    <div class="ps-3">
                      <h3><?php
                          require('config/conn.php');
                          $S = "SELECT COUNT(id) FROM student_details WHERE status =1 ";
                          $res2 = mysqli_query($connect, $S);
                          while ($row = mysqli_fetch_assoc($res2)) {
                            echo "" . $row['COUNT(id)'] . "";
                          }
                          ?>
                      
                      
                      </h3>
                    </div></div>
       
      </div>
    
    </div>
  </div>

  <div class="row">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Monthly Expenses</h5>
          <?php
                    require('config/conn.php');
                    $sql = "SELECT * FROM expenses";
                    $result = mysqli_query($connect, $sql);
                    $chart_data = "";
                    while ($row = mysqli_fetch_array($result)) {


                      $month[]  = date_format(date_create($row['date1']), "M d, Y");
                      $expenses[] = $row['amount'];
                    }


          ?>

<canvas  id="chartjs_line"></canvas>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
         <h5 class="card-title">Remuneration issued</h5>
       <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <span style=" font-size:2rem;
">  <i class="bi bi-currency-rupee text-warning"></i></span>
                    </div>
                    <div class="ps-3">
                      <h3><?php
                          require('config/conn.php');
                          $T = "SELECT SUM(salary) FROM staffs ";
                          $res1 = mysqli_query($connect, $T);
                          while ($row = mysqli_fetch_assoc($res1)) {
                            echo "" . $row['SUM(salary)'] . "";
                          }
                          ?>
                      
                      
                      </h3>
                    </div></div>
     
      </div>
    </div>
    <div class="card">
      <div class="card-body">
         <h5 class="card-title">Student Eminence</h5>
       <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <span style=" font-size:2rem;">  <i class="bi bi-mortarboard text-success"></i></span>
                    </div>
                    <div class="ps-3">
                      <h3><?php
                          require('config/conn.php');
                          $IN = "SELECT COUNT(inmark)  FROM internal_marks  WHERE  inmark >= 35 AND status =1 ";
                          $res3 = mysqli_query($connect, $IN);
                          while ($row = mysqli_fetch_assoc($res3)) {
                            echo "" . $row['COUNT(inmark)'];
                          }
                          ?>
                       
                      
                      
                      </h3>
                    </div></div>
     
      </div> -->
            </div>
        </div>

      </div>
    </div>


  <?php } ?>

  </div>
  </div>


  </div>
  </div>
  <!-- /.container-fluid -->
  </div>

  <nav>
    <!-- End Page Title -->


    </div>
    </div><!-- End Left side columns -->
    </div><!-- End Right side columns -->

    </div>
    </section>

    </div>


  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Jaam</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://dcc.technology/">DCE TECHNOLOGY</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script type="text/javascript">
    var ctx = document.getElementById("chartjs_line").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: <?php echo json_encode($month); ?>,
        datasets: [{
          backgroundColor: [
            "#5969ff",
            "#ff407b",
            "#25d5f2",
            "#ffc750",
            "#2ec551",
            "#7040fa",
            "#ff004e"
          ],
          data: <?php echo json_encode($expenses); ?>,
        }]
      },
      options: {
        legend: {
          display: true,
          position: 'bottom',

          labels: {
            fontColor: '#71748d',
            fontFamily: 'Circular Std Book',
            fontSize: 14,
          }
        },


      }
    });
  </script>


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
  <script src="./assets/js/ajax.js"></script>



</body>

</html>