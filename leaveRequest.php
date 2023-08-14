<?php
require('config/conn.php');
session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Employee Requests</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="icon">
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="apple-touch-icon">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="../img/logo.png" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
<script src ="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href=
"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  
  <style>
    
    .header {
      color:grey;
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
  background-color: #5C00A3;
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
      <a class="nav-link " data-bs-target="#approvals-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-check2-square"></i><span>Approvals</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="approvals-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="leaveRequest.php"  class="active">
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
     <h4 class="ml-4 mt-4">Leave requests</h4><br><br>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">New Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Approved</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" id="rejected-tab" data-toggle="tab" href="#rejected" role="tab" aria-controls="profile" aria-selected="false">Rejected</a>
                        </li>                        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card"><br> <form action="approveTime.php" method="post">  
                            <div class="row"><div class="col-md-6">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start m-3" ><div class="form-check">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" value="1" name ="all" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  <b>  All Employees</b>
  </label>
</div></div></div><div class="col-md-6">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3">
                    <input type="submit" name="approve" value="Approve" class="btn btn-success">  <input type="submit" name="reject" value="Reject" class="btn btn-danger"> </div></div>   </div>                        
                                <div class="container p-4" style="overflow:auto">
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                            <tr class="">
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Employee Name
                                                </th>
                                                <th>
                                                    Leave Type
                                                </th>
                                                <th>
                                                    Duration
                                                </th>
                                                <th>
                                                    Reason
                                                </th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require('config/conn.php');
                                            date_default_timezone_set('Asia/Kolkata');
                                            $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                                            $result7 = mysqli_query($connect, $sql7);
                    
                                            if ($result7) {
                                            $row7 = mysqli_fetch_assoc($result7);
                                                $name = $row7['name'];
                                              
                                           
                                          
                                            echo ' <input type="" name="head" value="'.$name.'" class="form-control" style="color:white; border:none;">';
                                            
                                            $sql = "SELECT leave_request.leave_type, leave_request.name,leave_request.reason, leave_request.from_date,leave_request.to_date, leave_request.sl_id,leave_request.approved_status,
                                            employee_details.supervisor,employee_details.name FROM leave_request INNER JOIN employee_details  ON leave_request.name= employee_details.name WHERE leave_request.approved_status = 0
                                              AND employee_details.supervisor='$name'";
                                            $result = $connect->query($sql);
                                          
                                            if($result !== false)
                                            {
                                       
                                            $i = 1;
                                            $output = '';                                            
                                            while ( $row = $result->fetch_array()) { 
                                               
                                              $name = $row['name'];
                                              $leave = $row['leave_type'];
                                              $reason = $row['reason'];
                                                
                                                if($row['to_date']){
                                                    $datee = $row['from_date'].' to '.$row['to_date'] ;
                                                } 
                                                else{
                                                    $datee = $row['from_date'] ;
                                                }

                                                $output .= '<tr>                    
                                                <td><input  type="checkbox" value="'.$row['sl_id'].'" id="hr4" name="hr4[]"></td>
                                                <td>'.$name.'</td> 
                                                <td>' . $leave  . ' </td>
                                                <td>' . $reason  . ' </td>
                                                <td> Date : ' .$datee .' 
                                              </td></tr>';   
                                                                                    
                                                                                                                                                                            
                                               
                                                $i++;
                                            }
                                            echo $output; }
                                            
                                          
                                          }else{
                                            echo '<td>No Records Found!</td>';
                                          }
                                            
                                           
                                            ?>
                                        </tbody>
                                    </table></form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card">                        
                                <div class="container p-4" style="overflow:auto">
                                <table class="table table-striped" id="dataTable1">
                                        <thead>
                                            <tr class="">
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Employee Name
                                                </th>
                                                <th>
                                                    Leave Type
                                                </th>
                                                <th>
                                                    Duration
                                                </th>
                                                <th>
                                                    Reason
                                                </th>
                                                                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            date_default_timezone_set('Asia/Kolkata');

                                            $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                                            $result7 = mysqli_query($connect, $sql7);
                    
                                            if ($result7) {
                                              while ($row7 = mysqli_fetch_array($result7)) {
                                                $name = $row7['name'];
                                              
                                              }
                                            }
                                             
                                  
                                            
                                            $sql = "SELECT leave_request.leave_type, leave_request.name,leave_request.reason, leave_request.from_date,leave_request.to_date, leave_request.sl_id,leave_request.approved_status,
                                            employee_details.supervisor,employee_details.name FROM leave_request INNER JOIN employee_details  ON leave_request.name= employee_details.name WHERE leave_request.approved_status = 1
                                              AND employee_details.supervisor='$name'";
                                            $result = $connect->query($sql);
                                          
                                            if($result !== false)
                                            {
                                            $i = 1;
                                            $output = '';                                            
                                            while ( $row = $result->fetch_array()) {  
                                              $name = $row['name'];
                                              $leave = $row['leave_type'];
                                              $reason = $row['reason'];
                                                
                                                if($row['to_date']){
                                                    $datee = $row['from_date'].' to '.$row['to_date'] ;
                                                } 
                                                else{
                                                    $datee = $row['from_date'] ;
                                                }
                                               

                                                $output .= '<tr>                    
                                                <td>' . $i . '</td>
                                                <td>'.$name.'</td>
                                                <td>' . $leave  . ' </td>
                                                <td>' . $reason  . ' </td>
                                                <td> Date : ' .$datee .' 
                                                </td>   
                                                                                    
                                                 
                                                </tr>';
                                                $i++;
                                            }
                                            echo $output;     }                                       ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                    
                        <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card">                        
                                <div class="container p-4" style="overflow:auto">
                                <table class="table table-striped" id="dataTable2">
                                        <thead>
                                            <tr class="">
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Employee Name
                                                </th>
                                                <th>
                                                    Leave Type
                                                </th>
                                                <th>
                                                    Duration
                                                </th>
                                                 <th>
                                                    Reason
                                                </th>
                                                                                         
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            date_default_timezone_set('Asia/Kolkata');
                                           
                                            $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                                            $result7 = mysqli_query($connect, $sql7);
                    
                                              
    
  
                                            if ($result7) {
                                              while ($row7 = mysqli_fetch_array($result7)) {
                                                $name = $row7['name'];
                                              
                                              }
                                            }
                                             
                                  
                                            
                                            $sql = "SELECT leave_request.leave_type, leave_request.name,leave_request.reason, leave_request.from_date,leave_request.to_date, leave_request.sl_id,leave_request.approved_status,
                                            employee_details.supervisor,employee_details.name FROM leave_request INNER JOIN employee_details  ON leave_request.name= employee_details.name WHERE leave_request.approved_status = 2
                                              AND employee_details.supervisor='$name'";
                                            $result = $connect->query($sql);
                                          
                                            if($result !== false)
                                            {
                                              $i = 1;
                                              $output = '';                                            
                                              while ( $row = $result->fetch_array()) {  
                                              $name = $row['name'];
                                              $leave = $row['leave_type'];
                                              $reason = $row['reason'];
                                                
                                                if($row['to_date']){
                                                    $datee = $row['from_date'].' to '.$row['to_date'] ;
                                                } 
                                                else{
                                                    $datee = $row['from_date'] ;
                                                }
                                                $output .= '<tr>                    
                                                <td>' . $i . '</td>
                                                <td>'.$name.'</td>  
                                                <td>' . $leave  . ' </td>
                                                <td>' . $reason  . ' </td>
                                                <td> Date : ' .$datee .'
                                                </td>   
                                                                                  
                                                    
                                                </tr>';
                                                $i++;
                                            }
                                            echo $output;}
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                    
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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

<!-- Bootstrap core JavaScript-->
<script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/js/demo/chart-area-demo.js"></script>
    <script src="./assets/js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="./assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/js/demo/datatables-demo.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/ajax.js"></script>

</body>

</html>